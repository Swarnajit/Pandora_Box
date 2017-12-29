<%@page import="java.util.Calendar"%>
<%@page import="java.util.Date"%>
<%@page import="java.text.SimpleDateFormat"%>
<%@page import="java.text.DateFormat"%>
<%@ page import="java.awt.AWTException"%>
<%@ page import="java.io.File"%>
<%@ page import="java.awt.Toolkit"%>
<%@ page import="java.io.IOException"%>
<%@ page import="java.awt.Rectangle"%><%@ page import="java.sql.*"%>
<%@ page import="java.awt.Robot"%>
<%@ page import="java.awt.image.BufferedImage"%>
<%@ page import="javax.imageio.ImageIO"%>
<%@ page import="javax.servlet.ServletException"%>
<%@ page import="javax.servlet.ServletException"%>


<%
//int n=Integer.parseInt(request.getParameter("val"));
int n=Integer.parseInt(request.getParameter("val")); 
Date date = Calendar.getInstance().getTime();
DateFormat dateFormat = new SimpleDateFormat("hh_mm_ss_yyyy_mm_dd");  
String strDate = dateFormat.format(date);  
if(n==1)
{
    try {
			Robot robot = new Robot(); 
			String format = "jpg";
			String fileName = "D:\\"+strDate+"."+ format;
			
			Rectangle screenRect = new Rectangle(Toolkit.getDefaultToolkit().getScreenSize());
			BufferedImage screenFullImage = robot.createScreenCapture(screenRect);
			ImageIO.write(screenFullImage, format, new File(fileName));
			
			out.print("A full screenshot saved! and filename is "+strDate);
		} catch (AWTException | IOException ex) {
			System.err.println(ex);
		}

}
%>