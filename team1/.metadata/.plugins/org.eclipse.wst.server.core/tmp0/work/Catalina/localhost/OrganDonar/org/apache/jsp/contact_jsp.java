package org.apache.jsp;

import javax.servlet.*;
import javax.servlet.http.*;
import javax.servlet.jsp.*;

public final class contact_jsp extends org.apache.jasper.runtime.HttpJspBase
    implements org.apache.jasper.runtime.JspSourceDependent {

  private static final JspFactory _jspxFactory = JspFactory.getDefaultFactory();

  private static java.util.List _jspx_dependants;

  private javax.el.ExpressionFactory _el_expressionfactory;
  private org.apache.AnnotationProcessor _jsp_annotationprocessor;

  public Object getDependants() {
    return _jspx_dependants;
  }

  public void _jspInit() {
    _el_expressionfactory = _jspxFactory.getJspApplicationContext(getServletConfig().getServletContext()).getExpressionFactory();
    _jsp_annotationprocessor = (org.apache.AnnotationProcessor) getServletConfig().getServletContext().getAttribute(org.apache.AnnotationProcessor.class.getName());
  }

  public void _jspDestroy() {
  }

  public void _jspService(HttpServletRequest request, HttpServletResponse response)
        throws java.io.IOException, ServletException {

    PageContext pageContext = null;
    HttpSession session = null;
    ServletContext application = null;
    ServletConfig config = null;
    JspWriter out = null;
    Object page = this;
    JspWriter _jspx_out = null;
    PageContext _jspx_page_context = null;


    try {
      response.setContentType("text/html");
      pageContext = _jspxFactory.getPageContext(this, request, response,
      			null, true, 8192, true);
      _jspx_page_context = pageContext;
      application = pageContext.getServletContext();
      config = pageContext.getServletConfig();
      session = pageContext.getSession();
      out = pageContext.getOut();
      _jspx_out = out;

      out.write("<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\r\n");
      out.write("<html xmlns=\"http://www.w3.org/1999/xhtml\">\r\n");
      out.write("<head>\r\n");
      out.write("<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />\r\n");
      out.write("<title>Blue Office - Contact Page</title>\r\n");
      out.write("<meta name=\"keywords\" content=\"\" />\r\n");
      out.write("<meta name=\"description\" content=\"\" />\r\n");
      out.write("<!--\r\n");
      out.write("Template 2036 Blue Office\r\n");
      out.write("http://www.tooplate.com/view/2036-blue-office\r\n");
      out.write("-->\r\n");
      out.write("<link href=\"tooplate_style.css\" rel=\"stylesheet\" type=\"text/css\" />\r\n");
      out.write("\r\n");
      out.write("</head>\r\n");
      out.write("<body class=\"subpage\">\r\n");
      out.write("\r\n");
      out.write("<div id=\"tooplate_wrapper\">\r\n");
      out.write("\r\n");
      out.write("\t<div id=\"tooplate_sidebar\">\r\n");
      out.write("\t\t<div id=\"site_title\"><a href=\"#\"><span></span></a></div>\r\n");
      out.write("        \r\n");
      out.write("        <div id=\"home_service\">\r\n");
      out.write("        \t<div class=\"home_service_box\"><span class=\"service1\"></span><h5><a href=\"#\">Service One</a></h5>Integer sit amet nulla vitae urna porttitor quis et tellus.</div>\r\n");
      out.write("            <div class=\"home_service_box\"><span class=\"service2\"></span><h5><a href=\"#\">Service Two</a></h5>\r\n");
      out.write("            Morbi lectus erat, tempus ac mattis eu, fringilla id elit.</div>\r\n");
      out.write("            <div class=\"home_service_box\"><span class=\"service3\"></span><h5><a href=\"#\">Service Three</a></h5>Nulla quam mi, faucibus non laoreet nec.</div>\r\n");
      out.write("        </div>\r\n");
      out.write("        \r\n");
      out.write("        <div class=\"sidebar_box\">\r\n");
      out.write("        \t<h4>Newsletter</h4>\t\r\n");
      out.write("\t\t\t\r\n");
      out.write("\t\t\t<div id=\"newsletter_box\">\r\n");
      out.write("\t\t\t<form action=\"#\" method=\"get\">\t\t\t\r\n");
      out.write("\t\t\tPlease enter your email address to subscribe our newsletter.<br />\r\n");
      out.write("\t\t\t<input type=\"text\" id=\"newsletter_email\" name=\"newsletter_email\" class=\"newsletter_email\" />\t\t\t\t           \r\n");
      out.write("            <input type=\"submit\" name=\"submit_subscribe\" id=\"submit_subscribe\" value=\"Subscribe\" />\r\n");
      out.write("            </form>\r\n");
      out.write("\t\t\t</div>\t\t\r\n");
      out.write("\t\t\t\r\n");
      out.write("            <div class=\"cleaner\"></div>\r\n");
      out.write("        </div>\r\n");
      out.write("\t</div> <!-- end of sidebar -->\r\n");
      out.write("    \r\n");
      out.write("    <div id=\"tooplate_main\">\r\n");
      out.write("    \t\r\n");
      out.write("        <div id=\"tooplate_menu\">\r\n");
      out.write("            <ul>\r\n");
      out.write("                <li><a href=\"index.jsp\">Home</a></li>\r\n");
      out.write("                <li><a href=\"about.jsp\">About Us</a></li>\r\n");
      out.write("                <li><a href=\"services.jsp\">Registration</a></li>\r\n");
      out.write("                <li><a href=\"gallery.jsp\">Gallery</a></li>\r\n");
      out.write("                <li><a href=\"contact.jsp\" class=\"current\">Contact</a></li>\r\n");
      out.write("            </ul>    \t\r\n");
      out.write("        </div> <!-- end of tooplate_menu -->\r\n");
      out.write("        \r\n");
      out.write("        <div id=\"content_title_box\">\r\n");
      out.write("\t        <h2>Contact Information</h2>\r\n");
      out.write("                <p>Donec at diam non mauris adipiscing tempus. Nam congue turpis quis purus cursus suscipit. Nullam tempor eleifend interdum. Validate <a href=\"http://validator.w3.org/check?uri=referer\" rel=\"nofollow\"><strong>XHTML</strong></a> and <a href=\"http://jigsaw.w3.org/css-validator/check/referer\" rel=\"nofollow\"><strong>CSS</strong></a>.</p>\r\n");
      out.write("        </div>\r\n");
      out.write("   \r\n");
      out.write("        <div id=\"tooplate_content\">\r\n");
      out.write("\t        \r\n");
      out.write("        \t<div class=\"content_box\">\r\n");
      out.write("                                \r\n");
      out.write("                <div class=\"col_w300 float_l\">\r\n");
      out.write("                \r\n");
      out.write("                <h6><strong>Location One</strong></h6>\r\n");
      out.write("\t\t\t\t\t440-550 Curabitur massa ipsum, <br />\r\n");
      out.write("\t\t\t\t\tProin dignissim molestie, 15500<br />\r\n");
      out.write("\t\t\t\t\tVenenatis ut turpis<br /><br />\t\t\t\t\r\n");
      out.write("\t\t\t\t\tPhone: 010-020-1150 <br/>\r\n");
      out.write("                    Email: <a href=\"mailto:info@company.com\">info@company.com</a>  \r\n");
      out.write("                </div>\r\n");
      out.write("                \r\n");
      out.write("                <div class=\"col_w300 float_r\">\r\n");
      out.write("                \r\n");
      out.write("                <h6><strong>Location Two</strong></h6>\r\n");
      out.write("                    990-330 Mauris mattis posuere nunc, <br />\r\n");
      out.write("                    Vivamus accumsan convallis, 11800<br />\r\n");
      out.write("                    Etiam nulla bibendum<br /><br />\r\n");
      out.write("                    Phone: 010-030-2500 <br />\r\n");
      out.write("                    Email: <a href=\"mailto:info@company.com\">info@company.com</a> \r\n");
      out.write("                </div>\r\n");
      out.write("                <div class=\"cleaner h40\"></div>\r\n");
      out.write("                \r\n");
      out.write("            <div id=\"contact_form\">\r\n");
      out.write("            \r\n");
      out.write("\t\t\t\t<h4>Quick Contact Form</h4>\r\n");
      out.write("\t\t\t\t\t<form method=\"post\" name=\"contact\" action=\"#\">\r\n");
      out.write("\t\t\t\t\t\r\n");
      out.write("\t\t\t\t\t\t<label for=\"author\">Name:</label> <input type=\"text\" id=\"author\" name=\"author\" class=\"required input_field\" />\r\n");
      out.write("\t\t\t\t\t\t<div class=\"cleaner h10\"></div>\r\n");
      out.write("\t\t\t\t\t\t\t\t\t\t\t\t\t\r\n");
      out.write("\r\n");
      out.write("\t\t\t\t\t\t<label for=\"email\">Email:</label> <input type=\"text\" maxlength=\"40\" id=\"email\" class=\"input_field\" name=\"email\" />\r\n");
      out.write("\t\t\t\t\t\t<div class=\"cleaner h10\"></div>\r\n");
      out.write("\t\t\t\t\t\t\t\t\t\t\t\r\n");
      out.write("\t\t\t\t\t\t<label for=\"subject\">Subject:</label> <input type=\"text\" class=\"validate-subject required input_field\" name=\"subject\" id=\"subject\"/>\t\t\t\t               \r\n");
      out.write("\t\t\t\t\t\t<div class=\"cleaner h10\"></div>\r\n");
      out.write("\t\t\t\t\t\t\t\r\n");
      out.write("\t\t\t\t\t\t<label for=\"text\">Message:</label> <textarea id=\"text\" name=\"text\" rows=\"0\" cols=\"0\" class=\"required\"></textarea>\r\n");
      out.write("\t\t\t\t\t\t<div class=\"cleaner h10\"></div>\t\t\t\t\r\n");
      out.write("\t\t\t\t\t\t\t\t\t\t\t\t\r\n");
      out.write("\t\t\t\t\t\t<input type=\"submit\" value=\"Send\" id=\"submit\" name=\"submit\" class=\"submit_btn float_l\" />\r\n");
      out.write("\t\t\t\t\t\t<input type=\"reset\" value=\"Reset\" id=\"reset\" name=\"reset\" class=\"submit_btn float_r\" />\r\n");
      out.write("\t\t\t\t\t\t\r\n");
      out.write("\t\t\t\t\t</form>\r\n");
      out.write("\t\t\t</div>\r\n");
      out.write("            </div>\r\n");
      out.write("\r\n");
      out.write("        </div> <!-- end of content -->\r\n");
      out.write("    \r\n");
      out.write("    </div> <!-- end of content -->\r\n");
      out.write("\t\r\n");
      out.write("    <div class=\"cleaner\"></div>    \r\n");
      out.write("</div> <!-- end of wrapper -->\r\n");
      out.write("\r\n");
      out.write("<div id=\"tooplate_footer_wrapper\">\r\n");
      out.write("\t<div id=\"tooplate_footer\">\r\n");
      out.write("\r\n");
      out.write("        <a href=\"index.html\">Home</a> | <a href=\"about.html\">About Us</a> | <a href=\"services.html\">Services</a> | <a href=\"gallery.html\">Gallery</a> | <a href=\"contact.html\">Contact</a> <br /><br />\r\n");
      out.write("        \r\n");
      out.write("        Copyright Â© 2048 <a href=\"#\">Company Name</a> - Design: <a href=\"http://www.tooplate.com\">tooplate</a>\r\n");
      out.write("\t\t\r\n");
      out.write("    </div>\r\n");
      out.write("</div>\r\n");
      out.write("\r\n");
      out.write("</body>\r\n");
      out.write("</html>");
    } catch (Throwable t) {
      if (!(t instanceof SkipPageException)){
        out = _jspx_out;
        if (out != null && out.getBufferSize() != 0)
          try { out.clearBuffer(); } catch (java.io.IOException e) {}
        if (_jspx_page_context != null) _jspx_page_context.handlePageException(t);
      }
    } finally {
      _jspxFactory.releasePageContext(_jspx_page_context);
    }
  }
}
