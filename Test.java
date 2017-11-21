package selenium_try;

import java.util.List;
import java.util.concurrent.TimeUnit;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.interactions.Actions;
import org.openqa.selenium.support.ui.Select;
//import org.openqa.selenium.firefox.FirefoxDriver;

public class Test 
{
	public static void main(String[] args) 
	{
		int i;
		System.setProperty("webdriver.chrome.driver", "C:\\Users\\User\\Downloads\\chromedriver_win32 (1)\\chromedriver.exe");
		WebDriver driver = new ChromeDriver();
		driver.get("https://www.paytm.com");
		driver.manage().window().maximize();
		driver.findElement(By.xpath("//*[@id='app']/div/div[2]/div[2]/div[3]/div[3]/div")).click();
		int abcd= driver.findElements(By.tagName("iframe")).size();
		for (i=0;i<abcd;i++)
		{
			driver.switchTo().frame(i);
			while(driver.findElements(By.name("username")).size()!=0)
			{
				driver.findElement(By.id("input_0")).sendKeys("9804306974");
				driver.findElement(By.id("input_1")).sendKeys("JAE3BAUU");
				driver.findElement(By.tagName("button")).click();
			}
			driver.switchTo().defaultContent();
		}
		driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
		driver.findElement(By.className("_1Vt1"));
		Actions action= new Actions(driver);
		WebElement we1=driver.findElement(By.className("_1Vt1"));
		action.moveToElement(we1).perform();
		System.out.println("Pass");
		driver.close();
		/*Actions action= new Actions(driver);
		WebElement we1=driver.findElement(By.xpath("/html/body/div[1]/div/div[2]/div[2]/div[3]/div[3]"));
		action.moveToElement(we1).perform();
		driver.manage().timeouts().implicitlyWait(20, TimeUnit.SECONDS);
		action.click(we1).perform();*/
			}
}
