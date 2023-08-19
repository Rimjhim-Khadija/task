<?php
require './Class/Employee.php';
$employee = new Employee('Khadiza', 30000);
echo "Employee: " . $employee->getName();
echo "</br>";
echo "Initial Salary: " . $employee->getSalary();
echo "</br>";
$employee->setSalary(60000);
echo "Updated Salary: " . $employee->getSalary() . "\n";

$employee->setSalary(-10000);
