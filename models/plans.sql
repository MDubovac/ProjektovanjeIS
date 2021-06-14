CREATE TABLE plans(
    plan_id INT(11) AUTO_INCREMENT NOT NULL,
    plan_name VARCHAR(255) NOT NULL,
    plan_days VARCHAR(255) NOT NULL,
    plan_hours VARCHAR(255) NOT NULL,
    plan_price VARCHAR(255) NOT NULL,
    PRIMARY KEY(plan_id)
);

-- Seed Plans Table:
INSERT INTO plans (plan_name, plan_days, plan_hours, plan_price) 
VALUES
    ("Mini", "2", "1h", "$8/Month"),
    ("Regular", "3", "1h", "$10/Month"),
    ("Regular +", "5", "Unlimited", "$15/Month"),
    ("Premium", "Unlimited", "Unlimited", "$24/Month"),
    ("Premium Pro", "Unlimited + Personal Trainer", "Unlimited + Personal Trainer", "$50/Month");