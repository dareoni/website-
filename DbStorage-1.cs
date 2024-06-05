using Microsoft.EntityFrameworkCore;

namespace MyWebApp.Data
{
    public class MyWebAppData : DbContext
    {
        public MyWebAppData(DbContextOptions options : base(options) { }

        public DbSet<Employee> Employees {  get; set; }
    }
}