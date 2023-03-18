CREATE TABLE `Users` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`emp_id` TEXT NOT NULL,
	`role_id` TEXT NOT NULL,
	`emp_status` TEXT NOT NULL,
	`country_type` TEXT NOT NULL,
	`email` TEXT NOT NULL,
	`password` TEXT NOT NULL,
	`is_deleted` BOOLEAN NOT NULL,
	`email_verified_at` TEXT NOT NULL,
	`remember_token` TEXT NOT NULL,
	`created_at` TIMESTAMP NOT NULL,
	`updated_at` TIMESTAMP NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Roles` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`role_name` TEXT NOT NULL AUTO_INCREMENT,
	`role_slug` TEXT NOT NULL AUTO_INCREMENT,
	`is_deleted` BOOLEAN NOT NULL AUTO_INCREMENT,
	`created_at` TIMESTAMP NOT NULL AUTO_INCREMENT,
	`updated_at` TIMESTAMP NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Departments` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`name` TEXT NOT NULL,
	`is_deleted` BOOLEAN NOT NULL,
	`created_at` TIMESTAMP NOT NULL,
	`updated_at` TIMESTAMP NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Employees` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`user_id` INT NOT NULL,
	`emp_id` TEXT NOT NULL AUTO_INCREMENT,
	`emp_name` TEXT NOT NULL,
	`emp_email` TEXT NOT NULL,
	`formdata` TEXT NOT NULL,
	`emp_pic` TEXT NOT NULL,
	`emp_status` TEXT NOT NULL,
	`country_type` TEXT NOT NULL,
	`appraisal_letter` TEXT NOT NULL,
	`appraisal_1` TEXT NOT NULL,
	`appraisal_2` TEXT NOT NULL,
	`appraisal_3` TEXT NOT NULL,
	`appraisal_4` TEXT NOT NULL,
	`ssc` TEXT NOT NULL,
	`hsc` TEXT NOT NULL,
	`graduation` TEXT NOT NULL,
	`experience_relieving` TEXT NOT NULL,
	`salary_slip` TEXT NOT NULL,
	`bank_statement` TEXT NOT NULL,
	`cancel_cheque` TEXT NOT NULL,
	`is_deleted` TEXT NOT NULL,
	`created_at` TIMESTAMP NOT NULL,
	`updated_at` TIMESTAMP NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Attendances` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`emp_id` INT NOT NULL,
	`att_month` TEXT NOT NULL,
	`data` TEXT NOT NULL,
	`totalDay` TEXT NOT NULL,
	`presentDay` TEXT NOT NULL,
	`wfoP` TEXT NOT NULL,
	`wfhP` TEXT NOT NULL,
	`late` TEXT NOT NULL,
	`ab` TEXT NOT NULL,
	`wfoHD` TEXT NOT NULL,
	`wfhHD` TEXT NOT NULL,
	`upl` TEXT NOT NULL,
	`ph` TEXT NOT NULL,
	`bl` TEXT NOT NULL,
	`wo` TEXT NOT NULL,
	`sd` TEXT NOT NULL,
	`is_deleted` TEXT NOT NULL,
	`created_at` TIMESTAMP NOT NULL,
	`updated_at` TIMESTAMP NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Salaries` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`user_id` INT NOT NULL,
	`emp_sal_id` INT NOT NULL,
	`month_yr` DATE NOT NULL,
	`emp_id` TEXT NOT NULL,
	`pre_leave_bal` TEXT NOT NULL,
	`total_ab` TEXT NOT NULL,
	`total_p` TEXT NOT NULL,
	`leaves_adjusted` TEXT NOT NULL,
	`adv_adj` TEXT NOT NULL,
	`net_salary` TEXT NOT NULL,
	`earnings` TEXT NOT NULL,
	`deductions` TEXT NOT NULL,
	`fix_sal_month_pay` TEXT NOT NULL,
	`daily_pay` TEXT NOT NULL,
	`sal_month_basic` TEXT NOT NULL,
	`sal_month_hra` TEXT NOT NULL,
	`sal_month_sa` TEXT NOT NULL,
	`sal_month_oa` TEXT NOT NULL,
	`spl_allo` TEXT NOT NULL,
	`food_allo` TEXT NOT NULL,
	`travel_allo` TEXT NOT NULL,
	`clawback` TEXT NOT NULL,
	`inc_amt` TEXT NOT NULL,
	`stack_Inc` TEXT NOT NULL,
	`Incentives` TEXT NOT NULL,
	`inc_qualified` TEXT NOT NULL,
	`kw_installed` TEXT NOT NULL,
	`kw_installed_rate` TEXT NOT NULL,
	`kw_installed_inc` TEXT NOT NULL,
	`otp_installed` TEXT NOT NULL,
	`otp_installed_rate` TEXT NOT NULL,
	`otp_installed_inc` TEXT NOT NULL,
	`refferal_inc` TEXT NOT NULL,
	`emp_pf_cont` TEXT NOT NULL,
	`empr_pf_cont` TEXT NOT NULL,
	`emp_esic_cont` TEXT NOT NULL,
	`empr_esic_cont` TEXT NOT NULL,
	`transport_redeem` TEXT NOT NULL,
	`food_redeem` TEXT NOT NULL,
	`tds_deduction` TEXT NOT NULL,
	`is_deleted` BOOLEAN NOT NULL,
	`created_at` TIMESTAMP NOT NULL,
	`updated_at` TIMESTAMP NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Untitled` (

);

CREATE TABLE `Untitled` (

);

CREATE TABLE `Untitled` (

);

CREATE TABLE `Untitled` (

);

CREATE TABLE `Untitled` (

);

CREATE TABLE `Untitled` (

);

CREATE TABLE `Untitled` (

);

CREATE TABLE `Untitled` (

);

CREATE TABLE `Untitled` (

);

CREATE TABLE `Untitled` (

);

CREATE TABLE `Untitled` (

);

ALTER TABLE `Users` ADD CONSTRAINT `Users_fk0` FOREIGN KEY (`role_id`) REFERENCES `Roles`(`id`);

ALTER TABLE `Employees` ADD CONSTRAINT `Employees_fk0` FOREIGN KEY (`user_id`) REFERENCES `Users`(`id`);

ALTER TABLE `Employees` ADD CONSTRAINT `Employees_fk1` FOREIGN KEY (`emp_id`) REFERENCES `Users`(`emp_id`);

ALTER TABLE `Employees` ADD CONSTRAINT `Employees_fk2` FOREIGN KEY (`formdata`) REFERENCES `Departments`(`id`);

ALTER TABLE `Attendances` ADD CONSTRAINT `Attendances_fk0` FOREIGN KEY (`emp_id`) REFERENCES `Employees`(`emp_id`);

ALTER TABLE `Salaries` ADD CONSTRAINT `Salaries_fk0` FOREIGN KEY (`user_id`) REFERENCES `Employees`(`user_id`);

ALTER TABLE `Salaries` ADD CONSTRAINT `Salaries_fk1` FOREIGN KEY (`emp_id`) REFERENCES `Employees`(`emp_id`);


















