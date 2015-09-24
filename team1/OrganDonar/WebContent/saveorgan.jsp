<%@page import="java.sql.Statement"%>
<%@page import="java.sql.DriverManager"%>
<%@page import="java.sql.Connection"%>
<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
<%
	String fname = request.getParameter("fname");
String lname = request.getParameter("lname");
String address = request.getParameter("address");
String organs = request.getParameter("organs");
String gender = request.getParameter("gender");
String email = request.getParameter("email");
long mobile = Long.parseLong(request.getParameter("mobile"));

try
{
	Class.forName("com.mysql.jdbc.Driver");
	Connection con = DriverManager.getConnection("jdbc:mysql://localhost/test?" +
            "user=root&password=root");
	Statement stm =con.createStatement();
	stm.execute("insert into tb_organ_reg values('"+fname+"','"+lname+"','"+address+"','"+organs+"','"+gender+"','"+email+"','"+mobile+"')");
	
	} catch (Exception exp) {

	}

out.println("<script>alert(\"Registration Success !\");window.location.href='services.jsp'</script>");
%>
</body>
</html>