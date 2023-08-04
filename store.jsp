<%@ page import="java.sql.*"%>

<%
string name=request.getParameter("fname");
string address=request.getParameter("address");
out.println(name+address);
%>