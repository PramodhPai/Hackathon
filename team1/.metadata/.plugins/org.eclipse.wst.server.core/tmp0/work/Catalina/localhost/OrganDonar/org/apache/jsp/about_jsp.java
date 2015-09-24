package org.apache.jsp;

import javax.servlet.*;
import javax.servlet.http.*;
import javax.servlet.jsp.*;

public final class about_jsp extends org.apache.jasper.runtime.HttpJspBase
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
      out.write("<title>Blue Office - About Our Company</title>\r\n");
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
      out.write("        <div id=\"site_title\"><a href=\"#\"><span></span></a></div>\r\n");
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
      out.write("        \r\n");
      out.write("      \t<div class=\"sidebar_box sbb_last\">\r\n");
      out.write("            <strong>Company Name</strong><br />\r\n");
      out.write("            172-168 Curabitur massa ipsum, <br />\r\n");
      out.write("            Proin dignissim molestie, 15500<br />\r\n");
      out.write("            Venenatis ut turpis<br />\r\n");
      out.write("        \t<b>Email:</b> <a href=\"mailto:info@yoursite.com\">info@yoursite.com</a>\t\t\r\n");
      out.write("\t\t</div>\r\n");
      out.write("\t</div> <!-- end of sidebar -->\r\n");
      out.write("    \r\n");
      out.write("    <div id=\"tooplate_main\">\r\n");
      out.write("    \t\r\n");
      out.write("        <div id=\"tooplate_menu\">\r\n");
      out.write("            <ul>\r\n");
      out.write("                <li><a href=\"index.jsp\">Home</a></li>\r\n");
      out.write("                <li><a href=\"about.jsp\" class=\"current\">About Us</a></li>\r\n");
      out.write("                <li><a href=\"services.jsp\">Registration</a></li>\r\n");
      out.write("                <li><a href=\"gallery.jsp\">Gallery</a></li>\r\n");
      out.write("                <li><a href=\"contact.jsp\">Contact</a></li>\r\n");
      out.write("            </ul>    \t\r\n");
      out.write("        </div> <!-- end of tooplate_menu -->\r\n");
      out.write("        \r\n");
      out.write("\t\t<div id=\"content_title_box\">\r\n");
      out.write("\t        <h2>About Us</h2>\r\n");
      out.write("\t\t\t<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent aliquam velit a magna sodales quis elementum ipsum auctor. </p>\r\n");
      out.write("        </div>\r\n");
      out.write("        \r\n");
      out.write("        <div id=\"tooplate_content\">\r\n");
      out.write("        \t\r\n");
      out.write("            <div class=\"content_box\">\r\n");
      out.write("                <div class=\"image_wrapper image_fl\"><img src=\"images/organ/about.png\" width=\"170\" height=\"100\" alt=\"image\" /></div>\r\n");
      out.write("                <p><em>For those waiting for a new hope of life, register yourself as an organ donor on any of the links below</em></p>\r\n");
      out.write("                <p>it's especially important to consider becoming an organ donor if you belong to an ethnic minority. Minorities including African-Americans, Asians and Pacific Islanders, Native Americans, and Hispanics are more likely than whites to have certain chronic conditions that affect the kidney, heart, lung, pancreas and liver. Certain blood types are more prevalent in ethnic minority populations. Because matching blood type is usually necessary for transplants, the need for minority donor organs is especially high. </p>\r\n");
      out.write("              <div class=\"btn_more\"><a href=\"#\">Read more <span>&raquo;</span></a></div>\r\n");
      out.write("                \r\n");
      out.write("\t\t\t</div>\r\n");
      out.write("            \r\n");
      out.write("            <div class=\"content_box cb_last\">\r\n");
      out.write("            \t\r\n");
      out.write("                <div class=\"col_w300 float_l\">                \r\n");
      out.write("\t\t\t\t\t<h3>Service Lists</h3>\r\n");
      out.write("                    <p>In hac habitasse platea dictumst. Cras sit amet ligula a massa iaculis mollis. Nam sed ipsum leo.</p>\r\n");
      out.write("                    <ul class=\"tooplate_list\">\r\n");
      out.write("                        <li>Aliquam dolor metus</li>\r\n");
      out.write("                        <li>Donec eget mollis</li>\r\n");
      out.write("                        <li>Curabitur convallis</li>\r\n");
      out.write("                        <li>Suspendisse ultrices</li>\r\n");
      out.write("                        <li>Vestibulum id lorem</li>                        \r\n");
      out.write("                    </ul>\r\n");
      out.write("                    <div class=\"cleaner\"></div>\r\n");
      out.write("                    <div class=\"btn_more\"><a href=\"#\"><span>&raquo;</span> Read more</a></div>\r\n");
      out.write("\t\t\t\t</div>\r\n");
      out.write("\t\t\t\t\r\n");
      out.write("                <div class=\"col_w300 float_r\">    \r\n");
      out.write("                    <h3>Our News</h3>\r\n");
      out.write("                    <div class=\"home_newsbox\">\r\n");
      out.write("\t\t\t\t\t\t<img src=\"images/image_01.jpg\" alt=\"image\" class=\"image_wrapper image_fl\" />\r\n");
      out.write("\t\t\t\t\t\t<p>Maecenas leo augue, scelerisque ut venenatis nec, dapibus vel enim. In eget ultrices dui. Suspendisse eros sem, elementum ut ultricies eu, dapibus ut mi. <a href=\"#\">Read more...</a></p>\r\n");
      out.write("\t\t\t\t\t\t<div class=\"cleaner\"></div>\r\n");
      out.write("\t\t\t\t\t</div>                \r\n");
      out.write("\t\t\t\t\t<div class=\"home_newsbox\">\r\n");
      out.write("\t\t\t\t\t\t<img src=\"images/image_03.jpg\" alt=\"Image 03\" class=\"image_wrapper image_fl\" />\r\n");
      out.write("\t\t\t\t\t\t<p>Proin fringilla volutpat sagittis. Sed non pulvinar neque. Donec laoreet pharetra mollis. Pellentesque a rutrum sapien. Proin a justo nisl, ac commodo eros. <a href=\"#\">Read more...</a></p>\r\n");
      out.write("\t\t\t\t\t\t<div class=\"cleaner\"></div>\r\n");
      out.write("\t\t\t\t\t</div>       \r\n");
      out.write("\t\t\t\t</div>                \r\n");
      out.write("                \r\n");
      out.write("                <div class=\"cleaner\"></div>\r\n");
      out.write("\t\t\t</div>\r\n");
      out.write("            \r\n");
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
