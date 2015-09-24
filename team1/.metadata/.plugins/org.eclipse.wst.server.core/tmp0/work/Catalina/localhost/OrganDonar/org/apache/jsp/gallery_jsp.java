package org.apache.jsp;

import javax.servlet.*;
import javax.servlet.http.*;
import javax.servlet.jsp.*;

public final class gallery_jsp extends org.apache.jasper.runtime.HttpJspBase
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
      out.write("<title>Blue Office - Gallery Page</title>\r\n");
      out.write("<meta name=\"keywords\" content=\"\" />\r\n");
      out.write("<meta name=\"description\" content=\"\" />\r\n");
      out.write("<!--\r\n");
      out.write("Template 2036 Blue Office\r\n");
      out.write("http://www.tooplate.com/view/2036-blue-office\r\n");
      out.write("-->\r\n");
      out.write("<link href=\"tooplate_style.css\" rel=\"stylesheet\" type=\"text/css\" />\r\n");
      out.write("\r\n");
      out.write("<!--////// CHOOSE ONE OF THE 3 PIROBOX STYLES  \\\\\\\\\\\\\\-->\r\n");
      out.write("<link href=\"css_pirobox/white/style.css\" media=\"screen\" title=\"shadow\" rel=\"stylesheet\" type=\"text/css\" />\r\n");
      out.write("<!--<link href=\"css_pirobox/white/style.css\" media=\"screen\" title=\"white\" rel=\"stylesheet\" type=\"text/css\" />\r\n");
      out.write("<link href=\"css_pirobox/black/style.css\" media=\"screen\" title=\"black\" rel=\"stylesheet\" type=\"text/css\" />-->\r\n");
      out.write("<!--////// END  \\\\\\\\\\\\\\-->\r\n");
      out.write("\r\n");
      out.write("<!--////// INCLUDE THE JS AND PIROBOX OPTION IN YOUR HEADER  \\\\\\\\\\\\\\-->\r\n");
      out.write("<script type=\"text/javascript\" src=\"js/jquery.min.js\"></script>\r\n");
      out.write("<script type=\"text/javascript\" src=\"js/piroBox.1_2.js\"></script>\r\n");
      out.write("<script type=\"text/javascript\">\r\n");
      out.write("$(document).ready(function() {\r\n");
      out.write("\t$().piroBox({\r\n");
      out.write("\t\t\tmy_speed: 600, //animation speed\r\n");
      out.write("\t\t\tbg_alpha: 0.5, //background opacity\r\n");
      out.write("\t\t\tradius: 4, //caption rounded corner\r\n");
      out.write("\t\t\tscrollImage : false, // true == image follows the page, false == image remains in the same open position\r\n");
      out.write("\t\t\tpirobox_next : 'piro_next', // Nav buttons -> piro_next == inside piroBox , piro_next_out == outside piroBox\r\n");
      out.write("\t\t\tpirobox_prev : 'piro_prev',// Nav buttons -> piro_prev == inside piroBox , piro_prev_out == outside piroBox\r\n");
      out.write("\t\t\tclose_all : '.piro_close',// add class .piro_overlay(with comma)if you want overlay click close piroBox\r\n");
      out.write("\t\t\tslideShow : 'slideshow', // just delete slideshow between '' if you don't want it.\r\n");
      out.write("\t\t\tslideSpeed : 4 //slideshow duration in seconds(3 to 6 Recommended)\r\n");
      out.write("\t});\r\n");
      out.write("});\r\n");
      out.write("</script>\r\n");
      out.write("<!--////// END  \\\\\\\\\\\\\\-->\r\n");
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
      out.write("\t\t\t</div>\t\r\n");
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
      out.write("                <li><a href=\"about.jsp\">About Us</a></li>\r\n");
      out.write("                <li><a href=\"services.jsp\">Registration</a></li>\r\n");
      out.write("                <li><a href=\"gallery.jsp\" class=\"current\">Gallery</a></li>\r\n");
      out.write("                <li><a href=\"contact.jsp\">Contact</a></li>\r\n");
      out.write("            </ul>    \t\r\n");
      out.write("        </div> <!-- end of tooplate_menu -->\r\n");
      out.write("        \r\n");
      out.write("        <div id=\"content_title_box\">\r\n");
      out.write("\t        <h2>Our Gallery</h2>\r\n");
      out.write("\t\t\t<p>\r\n");
      out.write("\t\t\tEvery year in India, nearly 5 lakh people suffering from \r\n");
      out.write("\t\t\torgan failure die due to unavailability of organs. \r\n");
      out.write("\t\t\t</p>\r\n");
      out.write("        </div>\r\n");
      out.write("        \r\n");
      out.write("        <div id=\"tooplate_content\">\r\n");
      out.write("        \t<div id=\"gallery\">\r\n");
      out.write("\t\t\t\r\n");
      out.write("            \t<div class=\"gallery_box\">\r\n");
      out.write("                \t<div class=\"left\">\r\n");
      out.write("                    \t<a href=\"images/organ/gallery.jpg\" class=\"pirobox\" title=\"Project 1\">\r\n");
      out.write("                    \t<img src=\"images/organ/gallery.jpg\" alt=\"Project 01\" /></a>\r\n");
      out.write("                    </div>\r\n");
      out.write("                    <div class=\"right\">\r\n");
      out.write("                        <h5> Carry your organ donor registration card all the time</h5>\r\n");
      out.write("                        <p>Only registering is not enough, it is advised that you carry the donor card with you all the time and keep your family informed about the decision.  <a href=\"http://validator.w3.org/check?uri=referer\" rel=\"nofollow\"><strong>XHTML</strong></a> and <a href=\"http://jigsaw.w3.org/css-validator/check/referer\" rel=\"nofollow\"><strong>CSS</strong></a>.</p>\r\n");
      out.write("                        <div class=\"btn_more float_r\"><a href=\"#\"><span>&raquo;</span> Read more</a></div>\r\n");
      out.write("                    </div>\r\n");
      out.write("\t\t\t\t\t\r\n");
      out.write("                    <div class=\"cleaner\"></div>\r\n");
      out.write("                </div>\r\n");
      out.write("                \r\n");
      out.write("                <div class=\"gallery_box\">\r\n");
      out.write("                    <div class=\"left\">\r\n");
      out.write("                    \t<a href=\"images/organ/gallery1.jpg\" class=\"pirobox\" title=\"Project 2\">\r\n");
      out.write("                    \t<img src=\"images/organ/gallery1.jpg\" alt=\"Project 02\" /></a>\r\n");
      out.write("                    </div>\r\n");
      out.write("                    <div class=\"right\">\r\n");
      out.write("                      <h5>\r\n");
      out.write("\t\t\t\t\t\tBut, not every donor's organs can be used for transplantation after death</h5>\r\n");
      out.write("                      <p>Vital organs like heart, kidneys, lungs, liver, intestines and pancreas can be transplanted only after a person has been declared brain dead. In the case of death due to cardiac arrest, that is when the heart stops beating, one can only donate tissues such as eyes, bones, skin, cornea, heart valves etc.</p>\r\n");
      out.write("                       <div class=\"btn_more float_r\"><a href=\"#\"><span>&raquo;</span> Read more</a></div>\r\n");
      out.write("                    </div>\r\n");
      out.write("               \t\t<div class=\"cleaner\"></div>\r\n");
      out.write("                </div>\r\n");
      out.write("                \r\n");
      out.write("                <div class=\"gallery_box\">\r\n");
      out.write("                \t<div class=\"left\">\r\n");
      out.write("                \t\t<a href=\"images/organ/gallery2.jpg\" class=\"pirobox\" title=\"Project 3\">\r\n");
      out.write("                \t\t<img src=\"images/organ/gallery2.jpg\" alt=\"Project 03\" /></a>\r\n");
      out.write("                    </div>\r\n");
      out.write("                    <div class=\"right\">\r\n");
      out.write("                    \t<h5>You can change your mind at any time</h5>\r\n");
      out.write("\t                  <p>Registering for organ donation is not a one-way route. At any moment after getting yourself registered as an organ donor, you can tear the card off and inform your family that you have changed your mind.</p>\r\n");
      out.write("        \t\t        <div class=\"btn_more float_r\"><a href=\"#\"><span>&raquo;</span> Read more</a></div>\r\n");
      out.write("                  \t</div>\r\n");
      out.write("                    <div class=\"cleaner\"></div>\r\n");
      out.write("                </div>\r\n");
      out.write("                \r\n");
      out.write("                <div class=\"gallery_box\">\r\n");
      out.write("                \t<div class=\"left\">\r\n");
      out.write("               \t\t\t<a href=\"images/organ/gallery3.jpeg\" class=\"pirobox\" title=\"Project 4\">\r\n");
      out.write("               \t\t\t<img src=\"images/organ/gallery3.jpeg\" alt=\"Project 04\" /></a>\r\n");
      out.write("                    </div>\r\n");
      out.write("\t\t\t\t\t<div class=\"right\">\r\n");
      out.write("                    \t<h5>No donation takes place without family's consent</h5>\r\n");
      out.write("                \t\t<p>Even if you are a registered organ donor, in India, the rule states that no organ transplantation can happen if your next of kin does not permit.</p>\r\n");
      out.write("\t\t              <div class=\"btn_more float_r\"><a href=\"#\"><span>&raquo;</span> Read more</a></div>\r\n");
      out.write("                    </div>\r\n");
      out.write("\t\t\t\t\t\r\n");
      out.write("                    <div class=\"cleaner\"></div>\r\n");
      out.write("                </div>\r\n");
      out.write("\t\t\t\t\r\n");
      out.write("        \t</div> <!-- end of Gallery -->\r\n");
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
