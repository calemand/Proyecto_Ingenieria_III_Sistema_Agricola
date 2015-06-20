CREATE TRIGGER `trig_EntradaHerramientaActualizarStock` AFTER INSERT ON `tbentradaherramienta`
 FOR EACH ROW BEGIN
UPDATE tbinventarioherramienta SET stock =(stock+new.cantidad)WHERE idHerramienta=new.idHerramientaHer;
END


CREATE TRIGGER `trig_SalidaHerramientaActualizarStock` AFTER INSERT ON `tbsalidaherramienta`
 FOR EACH ROW BEGIN
UPDATE tbinventarioherramienta SET
stock =(stock-new.cantidadSalidaHerramienta)
WHERE idHerramienta=new.codigoSalidaHerramienta;
END


CREATE TRIGGER `trig_InventarioActualizar` BEFORE UPDATE ON `tbinsumo`
 FOR EACH ROW begin
UPDATE tbinventario SET idInsumo=new.idInsumo, idCategoria=new.idCategoriaInsumo, nombreInsumo=new.nombreInsumo WHERE idInsumo=new.idInsumo;
end


CREATE TRIGGER `trig_InventarioEliminar` BEFORE DELETE ON `tbinsumo`
 FOR EACH ROW begin
DELETE FROM tbinventario WHERE idInsumo=old.idInsumo;
end


CREATE TRIGGER `trig_InventarioHerramientaActualizar` BEFORE UPDATE ON `tbherramienta`
 FOR EACH ROW BEGIN
UPDATE tbinventarioherramienta SET
nombre =new.nombre  , 
marca = new.marca , 
descripcion = new.descripcion
WHERE idHerramienta = new.idHerramienta;
END


CREATE TRIGGER `trig_InventarioHerramientaEliminar` BEFORE DELETE ON `tbherramienta`
 FOR EACH ROW BEGIN
DELETE FROM tbinventarioherramienta WHERE idHerramienta=old.idHerramienta;
END


CREATE TRIGGER `trig_InventarioHerramientaInsertar` AFTER INSERT ON `tbherramienta`
 FOR EACH ROW BEGIN
INSERT INTO tbinventarioherramienta
(idHerramienta, nombre, marca, descripcion, stock) VALUES
(new.idHerramienta, new.nombre, new.marca, new.descripcion, 0);
END


CREATE TRIGGER `trig_InventarioInsetar` AFTER INSERT ON `tbinsumo`
 FOR EACH ROW BEGIN
INSERT INTO tbinventario(idInsumo, idCategoria, nombreInsumo, stock) VALUES (new.idInsumo, new.idCategoriaInsumo, new.nombreInsumo,0);
end