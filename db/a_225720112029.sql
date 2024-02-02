/*
 Navicat Premium Data Transfer

 Source Server         : db_local
 Source Server Type    : MySQL
 Source Server Version : 100425 (10.4.25-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : a_225720112029

 Target Server Type    : MySQL
 Target Server Version : 100425 (10.4.25-MariaDB)
 File Encoding         : 65001

 Date: 02/02/2024 17:42:55
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tbl_nasabah
-- ----------------------------
DROP TABLE IF EXISTS `tbl_nasabah`;
CREATE TABLE `tbl_nasabah`  (
  `id_nasabah` int NOT NULL AUTO_INCREMENT,
  `no_rekening` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `alamat` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `no_hp` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `no_ktp` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_nasabah`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_nasabah
-- ----------------------------
INSERT INTO `tbl_nasabah` VALUES (1, '0001', 'ANI', 'ALAHAN PANJANG', '0813', '1376', 'ani@mail.com');
INSERT INTO `tbl_nasabah` VALUES (2, '0002', 'BUDI', 'BULAKAN', '0814', '1376', 'budi@mail.com');
INSERT INTO `tbl_nasabah` VALUES (3, '0003', 'CINDY', 'CENGKEH', '0815', '1376', 'cindy@mail.com');
INSERT INTO `tbl_nasabah` VALUES (4, '0004', 'Doni', 'DEPAN PASAR', '081215415644', '1376055132132131', 'doni@mail.com');
INSERT INTO `tbl_nasabah` VALUES (5, '0005', 'Eman', 'Empang', '081363564262', '1376055132132131', 'eman@mail.com');
INSERT INTO `tbl_nasabah` VALUES (8, '0006', 'Fuad', 'Fadang', '08121212133', '1313265465465465', 'fuad@mail.com');
INSERT INTO `tbl_nasabah` VALUES (10, '0007', 'Gani', 'asdadas', '08151564544', '2213132132132132', 'gani@mail.com');
INSERT INTO `tbl_nasabah` VALUES (11, '0008', 'Hani', 'Hansen', '08212321232', '2154654654654654', 'hani@mail.com');
INSERT INTO `tbl_nasabah` VALUES (13, '0009', 'Ijah', 'Ikua Koto Dibalai', '081363763112', '2554565465465465', 'ijah@mail.com');

SET FOREIGN_KEY_CHECKS = 1;
