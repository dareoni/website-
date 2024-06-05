import java.io.*;
import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.*;

@WebServlet("displayData.jsp")
public class SubmitFormServlet extends HttpServlet {

    @Override
    protected void doPost(HttpServletRequest req, HttpServletResponse res)
            throws ServletException, IOException {

        String name = req.getParameter("name");
        String email = req.getParameter("email");
        String number = req.getParameter("number");

        req.setAttribute("name", name);
        req.setAttribute("email", email);
        req.setAttribute("number", number);

        RequestDispatcher dispatcher = req.getRequestDispatcher("displayData.jsp");
        dispatcher.forward(req, res);

    }
}
