
SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for producto
-- ----------------------------
DROP TABLE IF EXISTS `producto`;
CREATE TABLE `producto` (
  `id_producto` char(5) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `precio` float DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of producto
-- ----------------------------
INSERT INTO `producto` VALUES ('00001', 'monitor', '100', '10');
INSERT INTO `producto` VALUES ('00002', 'mouse', '20.2', '20');
INSERT INTO `producto` VALUES ('00003', 'parlante', '45', '50');
INSERT INTO `producto` VALUES ('00004', 'usb', '10', '100');

-- ----------------------------
-- Table structure for usuario
-- ----------------------------
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) NOT NULL,
  `clave` varchar(100) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of usuario
-- ----------------------------
INSERT INTO `usuario` VALUES ('1', 'isai', '000');
INSERT INTO `usuario` VALUES ('2', 'juan', '000');
INSERT INTO `usuario` VALUES ('3', 'mari', '000');
INSERT INTO `usuario` VALUES ('4', 'luis', '000');


