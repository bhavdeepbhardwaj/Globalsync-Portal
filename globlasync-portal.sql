-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2023 at 06:09 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `globlasync-portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `emp_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `att_month` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalDay` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `presentDay` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wfoP` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wfhP` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `late` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ab` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wfoHD` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wfhHD` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ph` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sd` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendances`
--

INSERT INTO `attendances` (`id`, `emp_id`, `att_month`, `data`, `totalDay`, `presentDay`, `wfoP`, `wfhP`, `late`, `ab`, `wfoHD`, `wfhHD`, `upl`, `ph`, `bl`, `wo`, `sd`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'GSYNC008', '2023-02', '{\"2023-02-1\":\"WFO-P\",\"2023-02-2\":\"WFO-P\",\"2023-02-3\":\"WFO-P\",\"2023-02-4\":\"WFH-P\",\"2023-02-5\":\"WFH-P\",\"2023-02-6\":\"WFH-P\",\"2023-02-7\":\"WFH-P\",\"2023-02-8\":\"SD\",\"2023-02-9\":\"SD\",\"2023-02-10\":\"LATE\",\"2023-02-11\":\"LATE\",\"2023-02-12\":\"WFO-HD\",\"2023-02-13\":\"WFH-HD\",\"2023-02-14\":\"WFO-HD\",\"2023-02-15\":\"WFH-HD\",\"2023-02-16\":\"BL\",\"2023-02-17\":\"W\\/O\",\"2023-02-18\":\"W\\/O\",\"2023-02-19\":\"W\\/O\",\"2023-02-20\":\"W\\/O\",\"2023-02-21\":\"PH\",\"2023-02-22\":\"WFO-HD\",\"2023-02-23\":\"WFH-HD\",\"2023-02-24\":\"UPL\",\"2023-02-25\":\"UPL\",\"2023-02-26\":\"SD\",\"2023-02-27\":\"WFH-P\",\"2023-02-28\":\"WFO-P\"}', '28', '28', '4', '5', '2', '0', '3', '3', '2', '1', '1', '4', '3', 0, '2023-02-13 03:40:55', '2023-02-13 03:40:55'),
(2, 'GSYNC008', '2023-03', '{\"2023-03-1\":\"WFO-P\",\"2023-03-2\":\"LATE\",\"2023-03-3\":\"PH\",\"2023-03-4\":\"WFO-P\",\"2023-03-5\":\"WFH-P\",\"2023-03-6\":\"WFH-P\",\"2023-03-7\":\"LATE\",\"2023-03-8\":\"WFO-P\",\"2023-03-9\":\"AB\",\"2023-03-10\":\"AB\",\"2023-03-11\":\"WFO-HD\",\"2023-03-12\":\"WFO-HD\",\"2023-03-13\":\"WFH-HD\",\"2023-03-14\":\"WFH-HD\",\"2023-03-15\":\"UPL\",\"2023-03-16\":\"PH\",\"2023-03-17\":\"BL\",\"2023-03-18\":\"W\\/O\",\"2023-03-19\":\"SD\",\"2023-03-20\":\"W\\/O\",\"2023-03-21\":\"W\\/O\",\"2023-03-22\":\"W\\/O\",\"2023-03-23\":\"UPL\",\"2023-03-24\":\"WFO-HD\",\"2023-03-25\":\"WFO-HD\",\"2023-03-26\":\"WFH-P\",\"2023-03-27\":\"WFH-P\",\"2023-03-28\":\"WFH-P\",\"2023-03-29\":\"WFH-P\",\"2023-03-30\":\"WFO-P\",\"2023-03-31\":\"WFO-P\"}', '31', '29', '5', '6', '2', '2', '4', '2', '2', '2', '1', '4', '1', 0, '2023-02-13 03:45:26', '2023-02-13 03:45:26'),
(3, 'GSYNC008', '2023-05', '{\n    \"2023-05-1\": null,\n    \"2023-05-2\": null,\n    \"2023-05-3\": null,\n    \"2023-05-4\": null,\n    \"2023-05-5\": null,\n    \"2023-05-6\": null,\n    \"2023-05-7\": null,\n    \"2023-05-8\": null,\n    \"2023-05-9\": null,\n    \"2023-05-10\": null,\n    \"2023-05-11\": null,\n    \"2023-05-12\": null,\n    \"2023-05-13\": null,\n    \"2023-05-14\": null,\n    \"2023-05-15\": null,\n    \"2023-05-16\": null,\n    \"2023-05-17\": null,\n    \"2023-05-18\": null,\n    \"2023-05-19\": null,\n    \"2023-05-20\": null,\n    \"2023-05-21\": null,\n    \"2023-05-22\": null,\n    \"2023-05-23\": null,\n    \"2023-05-24\": null,\n    \"2023-05-25\": null,\n    \"2023-05-26\": null,\n    \"2023-05-27\": null,\n    \"2023-05-28\": null,\n    \"2023-05-29\": null,\n    \"2023-05-30\": null,\n    \"2023-05-31\": null\n}', '31', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, '2023-03-02 05:11:17', '2023-03-02 05:11:17'),
(4, 'GSYNC008', '2023-04', '{\"2023-04-1\":\"WFH-P\",\"2023-04-2\":\"WFH-P\",\"2023-04-3\":\"UPL\",\"2023-04-4\":\"LATE\",\"2023-04-5\":\"WFH-P\",\"2023-04-6\":\"WFO-P\",\"2023-04-7\":\"WFH-P\",\"2023-04-8\":\"WFH-P\",\"2023-04-9\":\"WFO-P\",\"2023-04-10\":\"WFH-P\",\"2023-04-11\":\"WFH-P\",\"2023-04-12\":\"WFH-P\",\"2023-04-13\":\"AB\",\"2023-04-14\":\"LATE\",\"2023-04-15\":\"WFH-HD\",\"2023-04-16\":\"AB\",\"2023-04-17\":\"AB\",\"2023-04-18\":\"AB\",\"2023-04-19\":\"AB\",\"2023-04-20\":\"AB\",\"2023-04-21\":\"WFH-P\",\"2023-04-22\":\"WFO-P\",\"2023-04-23\":\"WFO-P\",\"2023-04-24\":\"WFH-P\",\"2023-04-25\":\"BL\",\"2023-04-26\":\"SD\",\"2023-04-27\":\"W\\/O\",\"2023-04-28\":\"PH\",\"2023-04-29\":\"PH\",\"2023-04-30\":\"WFO-HD\"}', '30', '24', '4', '10', '2', '6', '1', '1', '1', '2', '1', '1', '1', 0, '2023-03-02 05:26:21', '2023-03-02 05:26:21'),
(5, 'GSYNC008', '2023-06', '{\"2023-04-1\":\"WFH-P\",\"2023-04-2\":\"WFH-P\",\"2023-04-3\":\"UPL\",\"2023-04-4\":\"LATE\",\"2023-04-5\":\"WFH-P\",\"2023-04-6\":\"WFO-P\",\"2023-04-7\":\"WFH-P\",\"2023-04-8\":\"WFH-P\",\"2023-04-9\":\"WFO-P\",\"2023-04-10\":\"WFH-P\",\"2023-04-11\":\"WFH-P\",\"2023-04-12\":\"WFH-P\",\"2023-04-13\":\"AB\",\"2023-04-14\":\"LATE\",\"2023-04-15\":\"WFH-HD\",\"2023-04-16\":\"AB\",\"2023-04-17\":\"AB\",\"2023-04-18\":\"AB\",\"2023-04-19\":\"AB\",\"2023-04-20\":\"AB\",\"2023-04-21\":\"WFH-P\",\"2023-04-22\":\"WFO-P\",\"2023-04-23\":\"WFO-P\",\"2023-04-24\":\"WFH-P\",\"2023-04-25\":\"BL\",\"2023-04-26\":\"SD\",\"2023-04-27\":\"W\\/O\",\"2023-04-28\":\"PH\",\"2023-04-29\":\"PH\",\"2023-04-30\":\"WFO-HD\"}', '30', '24', '4', '10', '2', '6', '1', '1', '1', '2', '1', '1', '1', 0, '2023-03-02 05:26:40', '2023-03-02 05:26:40'),
(6, 'GSYNC009', '2023-04', '{\"2023-04-1\":\"WFO-P\",\"2023-04-2\":\"WFO-P\",\"2023-04-3\":\"WFH-P\",\"2023-04-4\":\"WFO-HD\",\"2023-04-5\":\"AB\",\"2023-04-6\":\"WFO-HD\",\"2023-04-7\":\"AB\",\"2023-04-8\":\"AB\",\"2023-04-9\":\"WFH-P\",\"2023-04-10\":\"WFO-P\",\"2023-04-11\":\"WFH-P\",\"2023-04-12\":\"LATE\",\"2023-04-13\":\"LATE\",\"2023-04-14\":\"UPL\",\"2023-04-15\":\"UPL\",\"2023-04-16\":\"WFH-P\",\"2023-04-17\":\"WFH-P\",\"2023-04-18\":\"AB\",\"2023-04-19\":\"W\\/O\",\"2023-04-20\":\"W\\/O\",\"2023-04-21\":\"PH\",\"2023-04-22\":\"WFH-HD\",\"2023-04-23\":\"WFO-HD\",\"2023-04-24\":\"WFO-HD\",\"2023-04-25\":\"WFH-HD\",\"2023-04-26\":\"PH\",\"2023-04-27\":\"LATE\",\"2023-04-28\":\"LATE\",\"2023-04-29\":\"WFH-P\",\"2023-04-30\":\"WFO-P\"}', '30', '26', '4', '6', '4', '4', '4', '2', '2', '2', '0', '2', '0', 0, '2023-03-02 05:32:21', '2023-03-02 05:32:21'),
(7, 'GSYNC010', '2023-02', '{\"2023-02-1\":\"WFO-P\",\"2023-02-2\":\"WFO-P\",\"2023-02-3\":\"WFO-P\",\"2023-02-4\":\"WFH-P\",\"2023-02-5\":\"WFH-P\",\"2023-02-6\":\"LATE\",\"2023-02-7\":\"AB\",\"2023-02-8\":\"AB\",\"2023-02-9\":\"WFO-HD\",\"2023-02-10\":\"WFH-HD\",\"2023-02-11\":\"WFO-P\",\"2023-02-12\":\"SD\",\"2023-02-13\":\"W\\/O\",\"2023-02-14\":\"W\\/O\",\"2023-02-15\":\"W\\/O\",\"2023-02-16\":\"BL\",\"2023-02-17\":\"WFO-P\",\"2023-02-18\":\"WFO-P\",\"2023-02-19\":\"WFO-P\",\"2023-02-20\":\"WFO-P\",\"2023-02-21\":\"WFH-P\",\"2023-02-22\":\"WFO-P\",\"2023-02-23\":\"WFO-P\",\"2023-02-24\":\"WFO-P\",\"2023-02-25\":\"WFO-P\",\"2023-02-26\":\"WFO-P\",\"2023-02-27\":\"WFO-P\",\"2023-02-28\":\"WFO-P\"}', '28', '26', '15', '3', '1', '2', '1', '1', '0', '0', '1', '3', '1', 0, '2023-03-02 08:28:14', '2023-03-02 08:28:14');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'IT', 0, NULL, NULL),
(2, 'Sales', 0, NULL, NULL),
(3, 'HR', 0, NULL, NULL),
(4, 'Projects', 0, NULL, NULL),
(5, 'Finance', 0, NULL, NULL),
(6, 'Marketing', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `emp_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `formdata` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_pic` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_status` text COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `country_type` text COLLATE utf8mb4_unicode_ci DEFAULT 'In',
  `appraisal_letter` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appraisal_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appraisal_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appraisal_3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appraisal_4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ssc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hsc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `graduation` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience_relieving` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary_slip` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_statement` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cancel_cheque` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `emp_desg` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_doj` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_dept` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_pan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_uan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_esi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_paymode` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_bank` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_ifsc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_acc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_gsal` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_food` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_travel` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_spl` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_meal` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_cab` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_stinc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_inc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_other` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_exitdate` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_desp` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nick_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `line_manager` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `joining_month` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_hitting` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ageing` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rejoing_on` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_confirmation` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exit_formalities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fnf` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reason_of_leaving` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_of_attrition` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `annual_ctc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `in_hand_salary_with_stack` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transport_r_a` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marital_status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `present_address_h_no` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lacality_building` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_code` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `per_address_h_no` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `per_lacality_building` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `per_area` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `per_district` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `per_state` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `per_post_code` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `primary_email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aadhaar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nominee_details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relation` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emy_contact_no` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emy_contact_relation` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emy_contact_email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_bank` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_member` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mob_link_uan_no` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood_group` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `performer_month` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_verbal_warning` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reason_of_verbal_warning` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_verbal_warning` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_of_warning` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reason_of_warning` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pip_issue_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_written_warning` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `user_id`, `emp_id`, `emp_name`, `emp_email`, `formdata`, `emp_pic`, `emp_status`, `country_type`, `appraisal_letter`, `appraisal_1`, `appraisal_2`, `appraisal_3`, `appraisal_4`, `ssc`, `hsc`, `graduation`, `experience_relieving`, `salary_slip`, `bank_statement`, `cancel_cheque`, `is_deleted`, `created_at`, `updated_at`, `emp_desg`, `emp_doj`, `emp_dept`, `emp_pan`, `emp_uan`, `emp_esi`, `emp_paymode`, `emp_bank`, `emp_ifsc`, `emp_acc`, `emp_gsal`, `emp_food`, `emp_travel`, `emp_spl`, `emp_meal`, `emp_cab`, `emp_stinc`, `emp_inc`, `emp_other`, `emp_exitdate`, `emp_desp`, `nick_name`, `line_manager`, `joining_month`, `date_of_hitting`, `ageing`, `rejoing_on`, `date_of_confirmation`, `exit_formalities`, `fnf`, `reason_of_leaving`, `type_of_attrition`, `annual_ctc`, `in_hand_salary_with_stack`, `transport_r_a`, `father_name`, `gender`, `marital_status`, `present_address_h_no`, `lacality_building`, `area`, `district`, `state`, `post_code`, `per_address_h_no`, `per_lacality_building`, `per_area`, `per_district`, `per_state`, `per_post_code`, `phone`, `mobile`, `primary_email`, `aadhaar`, `nominee_details`, `relation`, `address`, `emy_contact_no`, `emy_contact_relation`, `emy_contact_email`, `total_bank`, `total_member`, `mob_link_uan_no`, `blood_group`, `performer_month`, `no_verbal_warning`, `reason_of_verbal_warning`, `date_of_verbal_warning`, `no_of_warning`, `dob`, `reason_of_warning`, `pip_issue_date`, `date_of_written_warning`) VALUES
(1, 8, 'GSYNC008', 'Demo Demo', 'demo1@globalsync.com.au', '{\"_token\":\"3EsI1qZKYKj0n7kkPMQxIPPOq4dTrqvEcjUHaijV\",\"emp_food\":\"2200\",\"emp_spl\":\"0\",\"emp_travel\":\"2200\",\"emp_meal\":\"1\",\"emp_cab\":\"1\",\"emp_stinc\":\"0\",\"emp_inc\":\"0\",\"emp_other\":\"0\",\"emp_paymode\":\"Bank Transfer\",\"emp_bank\":\"TEST\",\"emp_ifsc\":\"SDF34333\",\"transport_r_a\":\"0\",\"emp_acc\":\"2222222222222222\",\"emp_gsal\":\"50000\",\"annual_ctc\":\"600000\",\"in_hand_salary_with_stack\":\"48000\",\"father_name\":\"DFGHF STH\",\"nominee_details\":\"GHGF\",\"relation\":\"FGHDFG\",\"address\":\"DEMO DEMO DEMO DEMO DEMO DEMO DEMO DEMO DEMO\",\"total_member\":\"2\",\"emp_exitdate\":\"2023-03-01\",\"exit_formalities\":\"Hold\",\"reason_of_leaving\":\"DEMO DEMO DEMO DEMO DEMO DEMO DEMO DEMO DEMO\",\"fnf\":\"DEMO DEMO DEMO DEMO DEMO DEMO DEMO DEMO DEMO DEMO DEMO DEMO\",\"emp_desp\":\"DEMO DEMO DEMO DEMO DEMO DEMO DEMO DEMO DEMO DEMO DEMO\",\"emp_name\":\"Demo Demo\",\"emp_doj\":\"2023-02-04\",\"emp_desg\":\"IT Manager\",\"emp_dept\":\"1\",\"gender\":\"Male\",\"emp_pan\":\"SAD343SD\",\"emp_uan\":\"888888888888\",\"emp_esi\":\"88959595959597614\",\"nick_name\":\"Demo\",\"joining_month\":\"2021-12\",\"date_of_hitting\":\"2023-02-01\",\"rejoing_on\":\"2023-02-02\",\"date_of_confirmation\":\"2023-02-03\",\"ageing\":\"1\",\"performer_month\":\"2023-01\",\"line_manager\":\"DSASDA\",\"type_of_attrition\":\"ASD\",\"pip_issue_date\":\"2023-01-04\",\"no_verbal_warning\":\"ASDA\",\"date_of_verbal_warning\":\"2023-01-31\",\"reason_of_verbal_warning\":\"DEMO DEMO DEMO DEMO DEMO DEMO DEMO DEMO DEMO DEMO DEMO DEMO\",\"reason_of_warning\":\"DEMO DEMO DEMO DEMO DEMO DEMO DEMO DEMO DEMO\",\"no_of_warning\":\"0\",\"date_of_written_warning\":\"2023-01-30\",\"marital_status\":\"Married\",\"dob\":\"2023-02-01\",\"primary_email\":\"FDGDF@SDF.COM\",\"blood_group\":\"V\",\"aadhaar\":\"12456123456123456\",\"total_bank\":\"2\",\"mob_link_uan_no\":\"3136126312\",\"phone\":\"3136126312\",\"mobile\":\"3136126312\",\"emy_contact_email\":\"XVVC@CFGBC.CFVG\",\"emy_contact_no\":\"3136126312\",\"emy_contact_relation\":\"FSDS\",\"per_address_h_no\":\"SDFSD\",\"per_lacality_building\":\"SDF\",\"per_area\":\"SDF\",\"per_district\":\"SDF\",\"per_state\":\"SDSDF\",\"per_post_code\":\"562341\",\"present_address_h_no\":\"ZDFG\",\"lacality_building\":\"ZDFG\",\"area\":\"FGDFG\",\"district\":\"FGDF\",\"state\":\"DFG\",\"post_code\":\"123012\"}', '1675740197-footerImage.jpg', '1', 'In', '1675654122-QR-Code (80).pdf', '1675654122-signup-img.png', '1675654122-convertcsv.htm', '1675654122-Globalsync Pvt. Ltd. - Payroll System.pdf', '1675654122-IT Services.pdf', '1675654122-IT Services.pdf', '1675654122-IT Services.pdf', '1675654122-IT Services.pdf', '1675654122-Globalsync Pvt. Ltd. - Payroll System.pdf', '1675654122-IT Services.pdf', '1675654122-IT Services.pdf', '1675654122-IT Services.pdf', 0, '2023-02-06 03:28:42', '2023-03-01 05:38:51', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 9, 'GSYNC009', 'SDFDSF', 'demo2@globalsync.com.au', '{\"_token\":\"blOlcB8S9HMg5VYFmzDNFCcB6rMmJ0W76ChOEwAg\",\"emp_food\":\"2200\",\"emp_spl\":\"0\",\"emp_travel\":\"2200\",\"emp_meal\":\"1\",\"emp_cab\":\"1\",\"emp_stinc\":\"0\",\"emp_inc\":\"0\",\"emp_other\":\"0\",\"emp_paymode\":\"Bank Transfer\",\"emp_bank\":\"DFGFD\",\"emp_ifsc\":\"SDF32SD323SD\",\"transport_r_a\":null,\"emp_acc\":\"21234233313232\",\"emp_gsal\":\"50000\",\"annual_ctc\":\"600000\",\"in_hand_salary_with_stack\":\"45000\",\"father_name\":\"SD\",\"nominee_details\":\"DFGVDS\",\"relation\":\"DFVGDSF\",\"address\":\"SDFSDF\",\"total_member\":\"2\",\"emp_exitdate\":null,\"exit_formalities\":null,\"reason_of_leaving\":null,\"fnf\":null,\"emp_desp\":null,\"emp_name\":\"SDFDSF\",\"emp_doj\":\"2023-01-31\",\"emp_desg\":\"ASD\",\"emp_dept\":\"1\",\"gender\":\"Male\",\"emp_pan\":\"ASDASDASD\",\"emp_uan\":null,\"emp_esi\":null,\"nick_name\":null,\"joining_month\":\"2023-02\",\"date_of_hitting\":null,\"rejoing_on\":null,\"date_of_confirmation\":null,\"ageing\":null,\"performer_month\":null,\"line_manager\":\"ASDAS\",\"type_of_attrition\":null,\"pip_issue_date\":null,\"no_verbal_warning\":null,\"date_of_verbal_warning\":null,\"reason_of_verbal_warning\":null,\"reason_of_warning\":null,\"no_of_warning\":null,\"date_of_written_warning\":null,\"marital_status\":\"Single\",\"dob\":\"2023-02-03\",\"primary_email\":\"DSAFASD@DFG.CFG\",\"blood_group\":\"B\",\"aadhaar\":\"2342343434234\",\"total_bank\":\"1\",\"mob_link_uan_no\":\"5555555555\",\"phone\":\"5555555555\",\"mobile\":\"5555555555\",\"emy_contact_email\":\"SDFSD@FGHJGF.FGHF\",\"emy_contact_no\":\"7859642130\",\"emy_contact_relation\":\"SDFSD\",\"per_address_h_no\":\"SDFDS\",\"per_lacality_building\":\"JKB\",\"per_area\":\"LKJ\",\"per_district\":\"NL\",\"per_state\":\"NL\",\"per_post_code\":\"KN\",\"present_address_h_no\":\"LNK\",\"lacality_building\":\"LK\",\"area\":\"FGDFG\",\"district\":\"SDFSDF\",\"state\":\"SDFSDF\",\"post_code\":\"201309\"}', NULL, '1', 'Au', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2023-02-06 10:26:33', '2023-02-20 08:30:19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 10, 'GSYNC010', NULL, 'sdfsf@globalsync.com.au', '{\"_token\":\"2bY43Ka8vqlwwPFqMGOpWnAp5mogUKcEH4ZaBMDR\",\"emp_food\":\"2200\",\"emp_spl\":\"0\",\"emp_travel\":\"2200\",\"emp_meal\":\"0\",\"emp_cab\":\"0\",\"emp_stinc\":\"0\",\"emp_inc\":\"0\",\"emp_other\":\"0\",\"emp_paymode\":\"Bank Transfer\",\"emp_bank\":\"DFVDFG\",\"emp_ifsc\":\"DFS23SD\",\"transport_r_a\":null,\"emp_acc\":\"2334234234234234\",\"emp_gsal\":\"23234234\",\"annual_ctc\":\"234234234\",\"in_hand_salary_with_stack\":\"2343242\",\"father_name\":\"DFVXC\",\"nominee_details\":\"DFFG\",\"relation\":\"DFGDFG\",\"address\":\"fdfsdfs\",\"total_member\":null,\"emp_exitdate\":null,\"exit_formalities\":null,\"reason_of_leaving\":null,\"fnf\":null,\"emp_desp\":null,\"emp_name\":\"sdfs\",\"emp_doj\":\"2023-03-01\",\"emp_desg\":\"sdf\",\"emp_dept\":\"1\",\"gender\":\"Male\",\"emp_pan\":\"2312SDF2D\",\"emp_uan\":null,\"emp_esi\":null,\"nick_name\":null,\"joining_month\":\"2023-03\",\"date_of_hitting\":null,\"rejoing_on\":null,\"date_of_confirmation\":null,\"ageing\":null,\"performer_month\":null,\"line_manager\":\"DFGDF\",\"type_of_attrition\":null,\"pip_issue_date\":null,\"no_verbal_warning\":null,\"date_of_verbal_warning\":null,\"reason_of_verbal_warning\":null,\"reason_of_warning\":null,\"no_of_warning\":null,\"date_of_written_warning\":null,\"marital_status\":\"Single\",\"dob\":\"1994-03-11\",\"primary_email\":\"dfgdf@sdf.com\",\"blood_group\":\"b\",\"aadhaar\":\"98237210391\",\"total_bank\":null,\"mob_link_uan_no\":\"([[999]]) [[999]]-[[9999]]\",\"phone\":\"08266874849\",\"mobile\":\"08266874849\",\"emy_contact_email\":\"dfgdf@sdf.com\",\"emy_contact_no\":\"123123123\",\"emy_contact_relation\":\"sdfs\",\"per_address_h_no\":\"dfsd\",\"per_lacality_building\":\"sdf\",\"per_area\":\"sdf\",\"per_district\":\"sdf\",\"per_state\":\"sdf\",\"per_post_code\":\"24123\",\"present_address_h_no\":null,\"lacality_building\":null,\"area\":null,\"district\":null,\"state\":null,\"post_code\":null}', NULL, '1', 'In', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2023-03-02 08:25:20', '2023-03-02 08:25:20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jsons`
--

CREATE TABLE `jsons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_12_05_093203_create_roles_table', 1),
(6, '2023_01_16_125118_create_employees_table', 1),
(7, '2023_01_18_072248_create_departments_table', 1),
(8, '2023_01_23_081321_create_jsons_table', 1),
(9, '2023_02_08_075425_create_attendances_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mytable`
--

CREATE TABLE `mytable` (
  `Employee_ID` varchar(7) NOT NULL,
  `Employee_Name` varchar(4) NOT NULL,
  `Date` date NOT NULL,
  `Check_In` varchar(8) NOT NULL,
  `Check_Out` varchar(8) NOT NULL,
  `Durations` varchar(8) NOT NULL,
  `Whatsapp_No` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mytable`
--

INSERT INTO `mytable` (`Employee_ID`, `Employee_Name`, `Date`, `Check_In`, `Check_Out`, `Durations`, `Whatsapp_No`) VALUES
('G000000', 'TEST', '2023-02-27', '04:53:24', '14:18:08', '09:24:44', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `role_slug`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'superadmin', 0, NULL, NULL),
(2, 'Admin', 'admin', 0, NULL, NULL),
(3, 'HR', 'hr', 0, NULL, NULL),
(4, 'Finance', 'finance', 0, NULL, NULL),
(5, 'Manager', 'manager', 0, NULL, NULL),
(6, 'Employee', 'employee', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `emp_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint(20) NOT NULL,
  `emp_status` bigint(20) NOT NULL DEFAULT 0,
  `country_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'In',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `emp_id`, `role_id`, `emp_status`, `country_type`, `email`, `password`, `is_deleted`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'GSYNC000', 0, 0, 'In', 'demo@globalsync.com.au', '$2y$10$LNfzHq.4JQhnRsZMvsHtouWnoI.2N6vCvMMGAhGeKeh4MkCVj8y3G', 0, NULL, NULL, '2023-02-06 03:19:40', '2023-02-06 03:19:40'),
(2, 'GSYNC001', 1, 0, 'In', 'developer@globalsync.com.au', '$2y$10$GN1dEJBL3tla/eXOA.DlouIMVyNuzg7032keZhyOg43/DSQIBWKQi', 0, NULL, NULL, '2023-02-06 03:19:40', '2023-02-06 03:19:40'),
(3, 'GSYNC002', 2, 0, 'In', 'admin@globalsync.com.au', '$2y$10$WGVMNQJbbjOZ5SgWbxqJquBvO/w2EYS3FGadBRnFWaGkJ3J0bqQQ2', 0, NULL, NULL, '2023-02-06 03:19:40', '2023-02-06 03:19:40'),
(4, 'GSYNC003', 3, 0, 'In', 'hr@globalsync.com.au', '$2y$10$/E0e4NwanRrkPLL6DZQV0uB5tkTm9yPWjF0SFU7QveVMQVgw9.Y/.', 0, NULL, NULL, '2023-02-06 03:19:40', '2023-02-06 03:19:40'),
(5, 'GSYNC004', 4, 0, 'In', 'finance@globalsync.com.au', '$2y$10$DtE/Va/0yx45FuaJZiD0j.1dtaM.orvCCvTquFJM4E0gxSl6lBTw6', 0, NULL, NULL, '2023-02-06 03:19:40', '2023-02-06 03:19:40'),
(6, 'GSYNC005', 5, 0, 'In', 'manager@globalsync.com.au', '$2y$10$Ryc6xW8FPzttMNfIzZBise1AD.rdIvYQWiJ53RA0xNTORoAPcvnQe', 0, NULL, NULL, '2023-02-06 03:19:40', '2023-02-06 03:19:40'),
(7, 'GSYNC006', 6, 0, 'In', 'employee@globalsync.com.au', '$2y$10$1E.Tpa9Brltwen6WM5jzcerjmoZ9wv15eI6hGOxvvfmDqlbrv7waW', 0, NULL, NULL, '2023-02-06 03:19:40', '2023-02-06 03:19:40'),
(8, 'GSYNC008', 6, 1, 'In', 'demo1@globalsync.com.au', '$2y$10$L7eEBYI3z9/hmSe4zGE6wOIbw31pw.clHvOPpZ/VpNC5x65Hty09.', 0, NULL, NULL, '2023-02-06 03:28:42', '2023-03-01 05:38:51'),
(9, 'GSYNC009', 6, 1, 'Au', 'demo2@globalsync.com.au', '$2y$10$p1wN/HvmRcKzoMUY/vNCPugHRMG2vd63IiCJzEz26TzVRsCEyVo1K', 0, NULL, NULL, '2023-02-06 10:26:33', '2023-02-20 08:30:19'),
(10, 'GSYNC010', 6, 1, 'In', 'sdfsf@globalsync.com.au', '$2y$10$LNfzHq.4JQhnRsZMvsHtouWnoI.2N6vCvMMGAhGeKeh4MkCVj8y3G', 0, NULL, NULL, '2023-03-02 08:25:20', '2023-03-02 08:25:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jsons`
--
ALTER TABLE `jsons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mytable`
--
ALTER TABLE `mytable`
  ADD PRIMARY KEY (`Employee_ID`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jsons`
--
ALTER TABLE `jsons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
