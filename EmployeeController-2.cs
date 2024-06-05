using MyWebApp.Data;
using MyWebApp.Models;
using Microsoft.AspNetCore.Mvc;
using System.ComponentModel;

namespace MyWebApp.Controllers
{
	public class EmployeeController: Controller
	{
		[HttpGet]
		public async Task<IActionResult> Index()
		{
			var employees = await MyDb.Employees.ToListAsync();
			return View(employees);
		}

		private readonly MyDB MyDb;
		public EmployeeController(MyDB, MyDb)
		{
			this.MyDb = MyDb;
		}

		[HttpGet]
		public IActionResult Add()
		{
			return View();
		}

		[HttpPost]
		public async Task<IActionResult> Add(EmployeeModel EmployeeRequest)


			var employee = new Employee()
			{
				Id = Guid.NewGuid(),
				name = EmployeeModel.Name,
				email = EmployeeModel.Email,
				phone = EmployeeModel.Phone,
			};

			await myDb.Employees.AddAsync(employee);
			await myDb.SaveChangesAsync();
			return RedirectToAction("Index");

		[HttpGet]
		public IActionResult View(Guid id) {
			var emp = MyDb.Employees.FirstOrDefaultAsync(x => x.Id == id);
			return View(emp); 
		}
	}
}