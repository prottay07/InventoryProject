<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Employee Routes Are Here.......

Route::get('/add-employee', 'EmployeeController@index')->name('add.employee');

// Add Employee
Route::post('/insert-employee', 'EmployeeController@store');

// View All Employee

Route::get('/all-employee', 'EmployeeController@AllEmployee')->name('all.employee');

// View single Employee

Route::get('/view-employee/{id}', 'EmployeeController@ViewEmployee');

// delete single Employee

Route::get('/delete-employee/{id}', 'EmployeeController@DeleteEmployee');
// edit single Employee

Route::get('/edit-employee/{id}', 'EmployeeController@EditEmployee');

// update single Employee

Route::post('/update-employee/{id}', 'EmployeeController@UpdateEmployee');


// Customers Routes Are Here.......

Route::get('/add-customer', 'CustomerController@index')->name('add.customer');

// Add Customer
Route::post('/insert-customer', 'CustomerController@store');

// View All Customer

Route::get('/all-customer', 'CustomerController@AllCustomer')->name('all.customer');

// View single Customer

Route::get('/view-customer/{id}', 'CustomerController@ViewCustomer');

// delete single Customer

Route::get('/delete-customer/{id}', 'CustomerController@DeleteCustomer');

//Edit single customer

Route::get('/edit-customer/{id}', 'CustomerController@EditCustomer' );

// update single Customer

Route::post('/update-customer/{id}', 'CustomerController@UpdateCustomer');



// Suppliers Routes Are Here.......

Route::get('/add-supplier', 'SupplierController@index')->name('add.supplier');

// Add Supplier
Route::post('/insert-supplier', 'SupplierController@suuplierStore');

// View All Customer

Route::get('/all-supplier', 'SupplierController@AllSupplier')->name('all.supplier');

// View single Customer

Route::get('/view-supplier/{id}', 'SupplierController@ViewSupplier');

// delete single Customer

Route::get('/delete-supplier/{id}', 'SupplierController@DeleteSupplier');

//Edit single customer

Route::get('/edit-supplier/{id}', 'SupplierController@EditSupplier' );

// update single Customer

Route::post('/update-supplier/{id}', 'SupplierController@UpdateSupplier');


// Salary Routes Are Here.......

Route::get('/add-advance-salary', 'SalaryController@AddAdvancedSalary')->name('add.advance_salary');
Route::post('/insert-advancedsalary', 'SalaryController@insertAdvanced');
Route::get('/all-advance-salary', 'SalaryController@AllSalary')->name('all.advance_salary');

Route::get('/pay-salary', 'SalaryController@PaySalary')->name('pay.salary');


// Category Routes Are Here.......

Route::get('/add-category', 'CategoryController@AddCategory')->name('add.category');
Route::post('/insert-category', 'CategoryController@InsertCategory');
Route::get('/all-category', 'CategoryController@AllCategory')->name('all.category');


Route::get('/delete-category/{id}', 'CategoryController@DeleteCategory');

//Edit single category

Route::get('/edit-category/{id}', 'CategoryController@EditCategory' );

// update single category

Route::post('/update-category/{id}', 'CategoryController@UpdateCategory');


// Products Routes Are Here.......

Route::get('/add-product', 'ProductController@AddProduct')->name('add.product');
Route::post('/insert-product', 'ProductController@InsertProduct');
Route::get('/all-product', 'ProductController@AllProduct')->name('all.product');


Route::get('/delete-product/{id}', 'ProductController@DeleteProduct');

// //Edit single category

Route::get('/edit-product/{id}', 'ProductController@EditProduct' );

// // update single category

Route::post('/update-product/{id}', 'ProductController@UpdateProduct');
Route::get('/view-product/{id}', 'ProductController@ViewProduct');

// Expense Routes are here

Route::get('/add-expense','ExpenseController@AddExpense')->name('add.expense');
Route::post('/insert-expense','ExpenseController@InsertExpense');
Route::get('/today-expense','ExpenseController@TodayExpense')->name('today.expense');
Route::get('/edit-today/{id}','ExpenseController@EditTodayExpense');
Route::post('/update-today/{id}','ExpenseController@UpdateTodayExpense');

Route::get('/monthly-expense','ExpenseController@MonthlyExpense')->name('monthly.expense');
Route::get('/yearly-expense','ExpenseController@YearlyExpense')->name('yearly.expense');

// Month Wise routes

Route::get('/jan-expense','ExpenseController@JanuaryExpense')->name('jan.expense');
Route::get('/feb-expense','ExpenseController@FebruaryExpense')->name('feb.expense');
Route::get('/mar-expense','ExpenseController@MarchExpense')->name('mar.expense');
Route::get('/apr-expense','ExpenseController@AprilExpense')->name('apr.expense');
Route::get('/may-expense','ExpenseController@MayExpense')->name('may.expense');
Route::get('/jun-expense','ExpenseController@JuneExpense')->name('jun.expense');
Route::get('/jul-expense','ExpenseController@JulyExpense')->name('jul.expense');
Route::get('/aug-expense','ExpenseController@AugustExpense')->name('aug.expense');
Route::get('/sep-expense','ExpenseController@SeptemberExpense')->name('sep.expense');
Route::get('/oct-expense','ExpenseController@OctoberExpense')->name('oct.expense');
Route::get('/nov-expense','ExpenseController@NovemberExpense')->name('nov.expense');
Route::get('/dec-expense','ExpenseController@DecemberExpense')->name('dec.expense');
