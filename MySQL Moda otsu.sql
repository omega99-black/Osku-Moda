CREATE DATABASE Otsu_Moda;
USE Otsu_Moda;

CREATE TABLE roles (
    id_rol INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL
);

CREATE TABLE usuarios (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    contrasena VARCHAR(100) NOT NULL,
    estado VARCHAR(20) DEFAULT 'activo',
    id_rol INT NOT NULL,
    FOREIGN KEY (id_rol) REFERENCES roles(id_rol)
);

CREATE TABLE clientes (
    id_cliente INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    telefono VARCHAR(15),
    email VARCHAR(100),
    contrasena VARCHAR(100) NOT NULL,
    estado VARCHAR(20) DEFAULT 'activo'
);

CREATE TABLE categorias (
    id_categoria INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL
);

CREATE TABLE productos (
    id_producto INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT,
    precio DECIMAL(10,2) NOT NULL,
    cantidad_stock INT DEFAULT 0,
    foto VARCHAR(255),
    estado VARCHAR(20) DEFAULT 'activo'
);

CREATE TABLE producto_categoria (
    id_producto INT,
    id_categoria INT,
    PRIMARY KEY (id_producto, id_categoria),
    FOREIGN KEY (id_producto) REFERENCES productos(id_producto),
    FOREIGN KEY (id_categoria) REFERENCES categorias(id_categoria)
);

CREATE TABLE metodos_pago (
    id_metodo_pago INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL
);

CREATE TABLE proveedores (
    id_proveedor INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    telefono VARCHAR(15),
    email VARCHAR(100)
);

CREATE TABLE compras (
    id_compra INT AUTO_INCREMENT PRIMARY KEY,
    id_proveedor INT NOT NULL,
    fecha DATE NOT NULL,
    total DECIMAL(10,2) NOT NULL,
    id_metodo_pago INT NOT NULL,
    estado VARCHAR(50),
    FOREIGN KEY (id_proveedor) REFERENCES proveedores(id_proveedor),
    FOREIGN KEY (id_metodo_pago) REFERENCES metodos_pago(id_metodo_pago)
);

CREATE TABLE detalle_compra (
    id_detalle_compra INT AUTO_INCREMENT PRIMARY KEY,
    id_compra INT NOT NULL,
    id_producto INT NOT NULL,
    cantidad INT NOT NULL,
    precio_unitario DECIMAL(10,2) NOT NULL,
    subtotal DECIMAL(10,2) AS (cantidad * precio_unitario) STORED,
    FOREIGN KEY (id_compra) REFERENCES compras(id_compra),
    FOREIGN KEY (id_producto) REFERENCES productos(id_producto)
);

CREATE TABLE ventas (
    id_venta INT AUTO_INCREMENT PRIMARY KEY,
    id_cliente INT NOT NULL,
    fecha_venta DATE,
    total_venta DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (id_cliente) REFERENCES clientes(id_cliente)
);

CREATE TABLE detalle_venta (
    id_detalle INT AUTO_INCREMENT PRIMARY KEY,
    id_venta INT NOT NULL,
    id_producto INT NOT NULL,
    cantidad INT NOT NULL,
    precio_unitario DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (id_venta) REFERENCES ventas(id_venta),
    FOREIGN KEY (id_producto) REFERENCES productos(id_producto)
);

CREATE TABLE estados_seguimiento (
    id_estado INT AUTO_INCREMENT PRIMARY KEY,
    nombre_estado VARCHAR(50) NOT NULL
);

CREATE TABLE seguimiento_pedido (
    id_seguimiento INT AUTO_INCREMENT PRIMARY KEY,
    id_venta INT NOT NULL,
    id_estado INT NOT NULL,
    fecha_actualizacion DATETIME NOT NULL,
    observaciones TEXT,
    FOREIGN KEY (id_venta) REFERENCES ventas(id_venta),
    FOREIGN KEY (id_estado) REFERENCES estados_seguimiento(id_estado)
);

INSERT INTO roles (id_rol, nombre) VALUES
(1, 'Administrador'),
(2, 'Cliente');

INSERT INTO usuarios (nombre, email, contrasena, estado, id_rol) VALUES
('Rosendo Benavent Cañellas', 'seguracandelaria@escalona-vaquero.es', '65GHrmEP+k', 'activo', 1),
('Cristina Charo Peral Otero', 'gallegopiedad@castro-macias.net', 'x(Y1Gac6Cd', 'activo', 1),
('Jordi de Ferrera', 'gnogueira@gmail.com', 'Gc6LeZu&*Y', 'activo', 2),
('Álvaro Zurita', 'urrutiazapata@castellon.eu', 'Xf9*UY2pS!', 'activo', 2),
('Elisa Pareja', 'elenachueca@rubi.es', '39bUqA&7fM', 'activo', 2),
('Antonio Ferrer', 'pabloguerrero@duran.com', '1ZoCh@a88r', 'inactivo', 2),
('Rosa Romero', 'mateosines@raya-lizcano.com', 'h38F&pC1@z', 'activo', 2),
('Marta Castellanos', 'gabrielahervas@marti.es', '!zHd83SDap', 'activo', 2),
('Juan Bautista', 'rociovives@duque.org', 'OeP2@3cm&V', 'activo', 2),
('Luis Ortiz', 'isabelconde@ibanez.com', 'pA5r@xLpq$', 'activo', 2);

INSERT INTO clientes (nombre, telefono, email, contrasena, estado) VALUES
('Ana Torres', '3001112233', 'ana@gmail.com', 'ana123', 'activo'),
('Carlos Pérez', '3002223344', 'carlos@gmail.com', 'carlos123', 'activo'),
('Luisa Mendoza', '3003334455', 'luisa@gmail.com', 'luisa123', 'inactivo'),
('Mario Gómez', '3004445566', 'mario@gmail.com', 'mario123', 'activo'),
('Diana Ríos', '3005556677', 'diana@gmail.com', 'diana123', 'activo'),
('Pedro Lara', '3006667788', 'pedro@gmail.com', 'pedro123', 'bloqueado'),
('Marta Díaz', '3007778899', 'marta@gmail.com', 'marta123', 'activo'),
('Jorge Suárez', '3008889900', 'jorge@gmail.com', 'jorge123', 'activo'),
('Andrea López', '3009990011', 'andrea@gmail.com', 'andrea123', 'inactivo'),
('Luis Ramírez', '3000001122', 'luis@gmail.com', 'luis123', 'activo');

INSERT INTO categorias (id_categoria, nombre) VALUES
(1, 'Chaquetas'),
(2, 'Pantalones'),
(3, 'Camisetas'),
(4, 'Estilo'),
(5, 'Casual'),
(6, 'Formal'),
(7, 'Invierno'),
(8, 'Verano'),
(9, 'Deportivo'),
(10, 'Básico'),
(11, 'Premium'),
(12, 'Juvenil'),
(13, 'Vintage');


INSERT INTO productos (nombre, descripcion, precio, cantidad_stock, foto, estado) VALUES
('Qui', 'Magni accusantium velit ab commodi commodi iure.', 197301.29, 41, 'https://dummyimage.com/602x745', 'activo'),
('Pariatur', 'Sit autem magnam nobis.', 74228.36, 31, 'https://dummyimage.com/383x639', 'activo'),
('Fugit', 'Quas eveniet cumque iste quae laborum.', 80580.99, 38, 'https://placeimg.com/994/735/any', 'activo'),
('Rerum', 'Repellendus id ut laborum rerum sequi.', 101232.00, 20, 'https://dummyimage.com/500x500', 'activo'),
('Molestiae', 'Alias molestiae dolore dolores.', 69000.00, 12, 'https://dummyimage.com/400x400', 'activo'),
('Eveniet', 'Laborum ipsum ut doloribus vero.', 130000.99, 18, 'https://dummyimage.com/300x300', 'activo'),
('Saepe', 'Eos atque blanditiis doloremque.', 92000.50, 27, 'https://dummyimage.com/600x800', 'activo'),
('Velit', 'Eaque consequatur voluptate.', 153500.00, 15, 'https://dummyimage.com/550x750', 'activo'),
('Dolores', 'Veniam voluptate sit accusamus.', 111000.00, 22, 'https://dummyimage.com/350x450', 'activo'),
('Beatae', 'Ipsa explicabo a voluptatum.', 127000.00, 9, 'https://dummyimage.com/600x600', 'activo');


INSERT INTO producto_categoria (id_producto, id_categoria) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 1),
(8, 8),
(9, 9),
(10, 10);


INSERT INTO metodos_pago (id_metodo_pago, nombre) VALUES
(1, 'Tarjeta de crédito'),
(2, 'Transferencia'),
(3, 'Nequi'),
(4, 'Bizum'),
(5, 'Paypal'),
(6, 'Efectivo'),
(7, 'Daviplata'),
(8, 'Transferencia bancaria'),
(9, 'Crédito a cuotas'),
(10, 'Contraentrega'),
(11, 'Token Bancario'),
(12, 'PSE'),
(13, 'Cripto');


INSERT INTO proveedores (nombre, telefono, email) VALUES
('Cabeza-Peiró', '+34736667119', 'castanedarosalina@bayo-navas.net'),
('Armas PLC', '+34 963 069 606', 'cloeleal@canete.es'),
('Cobo-Salazar', '+34 739 17 64 35', 'aranzazuvillalonga@catala-barreda.es'),
('Grupo Andrade', '+34 622 15 44 01', 'luciacanal@tejada.com'),
('Ramírez y Asociados', '+34 910 24 14 55', 'inesmari@prieto.org'),
('Innovatek', '+34 611 27 64 12', 'ventas@innovatek.com'),
('Zafiro Textil', '+34 952 14 22 10', 'zafiro@textil.net'),
('Distribuciones Gallego', '+34 689 03 33 22', 'ventas@gallego.es'),
('Soluciones Moda', '+34 645 11 12 98', 'contacto@solucionesmoda.com'),
('Renova Group', '+34 644 33 18 77', 'info@renova.net'),
('Cuéllar Group', '+34 674 82 55 20', 'info@cuellar.com'),
('Técnicas Villar S.A.', '+34 627 16 42 39', 'contacto@villar.net'),
('Rodríguez y Torres', '+34 963 26 10 99', 'ventas@rodriguezytorres.es'),
('Grupo Candela', '+34 958 23 81 55', 'candela@grupo.es'),
('Diseños Medina', '+34 621 13 72 43', 'info@diseñosmedina.org');


INSERT INTO compras (id_proveedor, fecha, total, id_metodo_pago, estado) VALUES
(1, '2025-01-26', 155628.67, 10, 'activo'),
(2, '2025-02-28', 166198.11, 4, 'activo'),
(8, '2025-05-18', 170630.29, 7, 'activo'),
(4, '2025-04-05', 254188.98, 5, 'activo'),
(3, '2025-02-12', 398001.44, 6, 'inactivo'),
(7, '2025-06-15', 233318.70, 2, 'activo'),
(6, '2025-03-27', 473822.90, 8, 'activo'),
(9, '2025-05-21', 689214.25, 9, 'activo'),
(10, '2025-04-09', 299301.30, 1, 'activo'),
(5, '2025-03-10', 523893.55, 3, 'activo');


INSERT INTO detalle_compra (id_compra, id_producto, cantidad, precio_unitario) VALUES
(2, 9, 1, 109298.63),
(6, 8, 6, 137905.30),
(8, 3, 4, 68547.62),
(1, 7, 2, 134999.00),
(3, 1, 3, 125800.00),
(5, 6, 5, 112000.00),
(7, 4, 2, 108000.00),
(4, 2, 1, 148500.00),
(9, 5, 3, 127000.00),
(10, 10, 4, 129500.00);


INSERT INTO ventas (id_cliente, fecha_venta, total_venta) VALUES
(9, '2025-01-17', 407143.81),
(9, '2025-02-05', 631332.48),
(6, '2025-04-29', 652058.41),
(4, '2025-01-13', 134783.17),
(7, '2025-03-22', 584392.08),
(3, '2025-05-10', 723181.09),
(2, '2025-06-02', 331920.75),
(1, '2025-04-17', 257101.47),
(10, '2025-02-28', 471010.14),
(5, '2025-06-01', 553000.62);


INSERT INTO detalle_venta (id_venta, id_producto, cantidad, precio_unitario) VALUES
(6, 6, 2, 130196.61),
(5, 7, 1, 101386.11),
(2, 5, 3, 147776.64),
(1, 3, 1, 80000.00),
(4, 2, 2, 95500.75),
(3, 4, 1, 124400.00),
(7, 6, 2, 109999.99),
(8, 2, 1, 150000.00),
(9, 1, 2, 92000.00),
(10, 10, 4, 132000.00);


INSERT INTO estados_seguimiento (id_estado, nombre_estado) VALUES
(1, 'Preparando pedido'),
(2, 'Despachado'),
(3, 'En tránsito'),
(4, 'Centro de distribución'),
(5, 'En entrega'),
(6, 'Entregado'),
(7, 'Devuelto'),
(8, 'Cancelado'),
(9, 'En espera'),
(10, 'Reprogramado');


INSERT INTO seguimiento_pedido (id_venta, id_estado, fecha_actualizacion, observaciones) VALUES
(8, 4, '2025-03-04 20:03:58', 'Sequi blanditiis delectus commodi.'),
(7, 2, '2025-02-26 20:17:43', 'Voluptatibus eius cupiditate libero tempora laudantium.'),
(10, 7, '2025-03-12 11:18:16', 'Nam voluptas at sapiente delectus.'),
(9, 3, '2025-05-01 09:35:00', 'Producto llegó al centro logístico.'),
(6, 1, '2025-05-08 16:45:23', 'Empaque preparado.'),
(5, 5, '2025-06-02 10:12:10', 'En trayecto a la dirección.'),
(4, 6, '2025-06-03 18:20:30', 'Producto entregado.'),
(3, 8, '2025-06-05 08:13:55', 'Pedido cancelado por cliente.'),
(2, 9, '2025-06-06 13:45:12', 'En espera de confirmación.'),
(1, 10, '2025-06-07 11:59:00', 'Entrega reprogramada por clima.');


SELECT * FROM roles;
SELECT * FROM usuarios;
SELECT * FROM clientes;
SELECT * FROM categorias;
SELECT * FROM productos;
SELECT * FROM producto_categoria;
SELECT * FROM metodos_pago;
SELECT * FROM proveedores;
SELECT * FROM compras;
SELECT * FROM detalle_compra;
SELECT * FROM ventas;
SELECT * FROM detalle_venta;
SELECT * FROM estados_seguimiento;
SELECT * FROM seguimiento_pedido;

SELECT c.nombre, v.total_venta
FROM ventas v
JOIN clientes c ON v.id_cliente = c.id_cliente
WHERE v.total_venta > (
    SELECT AVG(total_venta)
    FROM ventas
);

SELECT p.nombre AS producto, p.precio, dv.cantidad
FROM productos p
JOIN detalle_venta dv ON p.id_producto = dv.id_producto
WHERE p.id_producto IN (
    SELECT id_producto
    FROM detalle_venta
    GROUP BY id_producto
    HAVING COUNT(*) >= 2
);

SELECT c.nombre AS cliente, p.nombre AS producto, es.nombre_estado AS estado_actual
FROM clientes c
JOIN ventas v ON c.id_cliente = v.id_cliente
JOIN detalle_venta dv ON v.id_venta = dv.id_venta
JOIN productos p ON dv.id_producto = p.id_producto
JOIN seguimiento_pedido sp ON v.id_venta = sp.id_venta
JOIN estados_seguimiento es ON sp.id_estado = es.id_estado
WHERE sp.id_estado = (
    SELECT MAX(id_estado)
    FROM estados_seguimiento
);

create role administrador;
CREATE USER 'juanito'@'localhost' IDENTIFIED BY '4321';
GRANT 'administrador' TO 'juanito'@'localhost';
SET DEFAULT ROLE 'administrador' TO 'juanito'@'localhost';
REVOKE administrador FROM 'juanito'@'localhost';
DELIMITER $$

CREATE PROCEDURE sp_registrar_venta (
    IN p_id_cliente INT,
    IN p_id_producto INT,
    IN p_cantidad INT,
    OUT p_id_nueva_venta INT
)
BEGIN
    DECLARE v_stock_actual INT;
    DECLARE v_precio DECIMAL(10,2);

    START TRANSACTION;

    SELECT cantidad_stock, precio INTO v_stock_actual, v_precio
    FROM productos
    WHERE id_producto = p_id_producto
    FOR UPDATE;

    IF v_stock_actual >= p_cantidad THEN
        INSERT INTO ventas (id_cliente, fecha_venta, total_venta)
        VALUES (p_id_cliente, NOW(), p_cantidad * v_precio);

        SET p_id_nueva_venta = LAST_INSERT_ID();

        INSERT INTO detalle_venta (id_venta, id_producto, cantidad, precio_unitario)
        VALUES (p_id_nueva_venta, p_id_producto, p_cantidad, v_precio);

        UPDATE productos
        SET cantidad_stock = cantidad_stock - p_cantidad
        WHERE id_producto = p_id_producto;

        COMMIT;
    ELSE
        ROLLBACK;
        SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'Error: stock insuficiente.';
    END IF;
END$$

DELIMITER ;

CALL sp_registrar_venta(1, 3, 2, @nueva_venta_id);
SELECT @nueva_venta_id;


