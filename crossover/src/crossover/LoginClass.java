package crossover;

import java.util.concurrent.TimeUnit;

import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.firefox.FirefoxDriver;
import org.testng.annotations.Test;

public class LoginClass {
	
	
	@Test
	public void login()
	{
		  System.setProperty("webdriver.chrome.driver", "D:\\chromedriver_win32\\chromedriver.exe");
		  WebDriver dr=new ChromeDriver();
		  dr.manage().timeouts().implicitlyWait(10, TimeUnit.SECONDS);
		  dr.get("http://www.bookreta.com/");
		  dr.manage().window().maximize();
		  System.out.println(dr.getTitle());
		  dr.quit();
	}

}
