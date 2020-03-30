/*
 Navicat Premium Data Transfer

 Source Server         : localserver
 Source Server Type    : MySQL
 Source Server Version : 100137
 Source Host           : localhost:3306
 Source Schema         : covid

 Target Server Type    : MySQL
 Target Server Version : 100137
 File Encoding         : 65001

 Date: 30/03/2020 19:15:36
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for covid_data
-- ----------------------------
DROP TABLE IF EXISTS `covid_data`;
CREATE TABLE `covid_data`  (
  `idCovid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `mr_number` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `age` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `gender` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `weight` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `height` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `blood_group` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `marital_status` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `fever` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `duration_of_fever` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `current_temperature` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `hospital_admission` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `date_of_discharge` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `contact_with_Patient` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `contact_with_covid_patient` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `travel_history` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `countryVisited` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `other_country` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date_of_arrival` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Cough` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Sore_Throat` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Shortness_of_Breath` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Fatigue_Weakness` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Pain` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Phelgm` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Chills` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Headache` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Nausea` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Vomiting` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Stomach_Pain` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Sneezing` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Runny_Nose` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Heart_Problems` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Diabetics` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Hypertensive` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Respiratory_Illness` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Cancer` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `server_date_time` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idCovid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of covid_data
-- ----------------------------
INSERT INTO `covid_data` VALUES (1, 'adasdsa12321', '27', '2', '44', '6.2', 'B-', 'Single', 'Yes', '3', '99', 'Yes', '13 Septmmber 2019', 'Yes', 'Yes', 'Yes', 'Italy, China, Iran, Spain, Germany, France, USA, UK, Netherlands, Japan, Others', NULL, '10 Ocotber 2010', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', '2020-03-30 17:44:55');
INSERT INTO `covid_data` VALUES (5, 'HH1234', '27', '1', '', '', 'B+', 'Single', 'Yes', '12', '12', 'No', 'D', 'Yes', 'Yes', 'Yes', 'Italy, Iran, UK', NULL, '', '', 'Y', '', 'Y', '', '', '', '', '', '', 'Y', '', '', '', '', '', '', 'Y', '2020-03-30 18:16:35');
INSERT INTO `covid_data` VALUES (6, 'ABC1234', '27', '1', '72', '6.0', 'B+', 'Single', 'No', '', '99', 'No', '', 'No', '', 'No', '', '', '', '', '', '', '', 'Y', '', '', 'Y', '', '', '', 'Y', '', '', '', '', '', '', '2020-03-30 19:07:55');
INSERT INTO `covid_data` VALUES (7, 'ABC1234', '28', '2', '45', '5.6', 'B-', 'Married', 'Yes', '4', '101', 'Yes', '', 'Yes', 'Yes', 'Yes', 'Italy, Spain, Others', 'Canada', '2019-03-11', 'Y', '', 'Y', 'Y', '', 'Y', '', '', '', '', '', 'Y', 'Y', '', 'Y', '', 'Y', 'Y', '2020-03-30 19:10:21');

SET FOREIGN_KEY_CHECKS = 1;
