using Microsoft.AspNetCore.Mvc;

namespace MyWebApp.Controllers
{
	public class EmployeeController: Controller
	{

		[HttpGet]
		public IActionResult Add()
		{
			return View();
		}
	}
}