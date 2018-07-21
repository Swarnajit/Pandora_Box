package crossover;

import java.util.concurrent.TimeUnit;

import org.openqa.selenium.By;
import org.openqa.selenium.JavascriptExecutor;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.firefox.FirefoxDriver;
import org.openqa.selenium.support.ui.WebDriverWait;

public class GmailLogin {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		System.setProperty("webdriver.chrome.driver", "D:\\chromedriver_win32\\chromedriver.exe");
		WebDriver dr=new ChromeDriver();
		
			  dr.manage().timeouts().implicitlyWait(10, TimeUnit.SECONDS);
			  dr.get("https://www.gmail.com/");
			  dr.manage().window().maximize();
			  dr.findElement(By.id("identifierId")).click();
			  dr.findElement(By.id("identifierId")).sendKeys("adhikaryswarnajit18@gmail.com");
			  dr.findElement(By.id("identifierNext")).click();
			  WebDriverWait wait= new WebDriverWait(dr,15);
			  dr.manage().timeouts().implicitlyWait(10, TimeUnit.SECONDS);
			  WebElement ele=dr.findElement(By.xpath("//div[@class='IMH1vc lUHSR Hj2jlf']"));
			  if (ele.isDisplayed())
			  {
				  String js = "arguments[0].style.height='auto'; arguments[0].style.visibility='visible';";
				  ((JavascriptExecutor) dr).executeScript(js, ele);
				  ele.click();  
			  }
			  //dr.findElement(By.xpath("//div[text()='Enter your password']")).click();
			//*[@id="view_container"]/form/div[2]/div/div[3]/div[2]/div/div/text()
			//*[@id="identifierNext"]/content/span
			//*[@id="view_container"]/form/div[2]/div/div[3]/div[2]/div/div/text()
	}

}
