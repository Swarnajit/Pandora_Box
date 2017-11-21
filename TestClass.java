package selenium_try;

import java.io.File;
import java.io.IOException;

/* IMPORTANT: Multiple classes and nested static classes are supported */

import java.io.InputStreamReader;
import java.text.DateFormat;
import java.text.SimpleDateFormat;
import java.util.*;
import java.util.concurrent.TimeUnit;

import org.apache.commons.io.FileUtils;
import org.openqa.selenium.By;
import org.openqa.selenium.OutputType;
import org.openqa.selenium.TakesScreenshot;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.firefox.FirefoxDriver;
class TestClass
{
	public static void main(String args[]) throws InterruptedException
	{
		String str;
		System.setProperty("webdriver.chrome.driver", "C:\\Users\\User\\workspace\\selenium_try\\chromedriver.exe");
		WebDriver dr=new ChromeDriver();
		dr.get("https://www.flipkart.com");
		dr.manage().window().maximize();
		WebElement we=dr.findElement(By.xpath(".//*[@id='container']/div/header/div[2]/div"));
		//=we.findElements(By.className(By.partialLinkText("Wbt_B2")));
		//Thread abcd=new Thread();
		//*[@id="container"]/div/header/div[1]/div[2]/div/div/div[2]/form/div/div[1]/div/input
		dr.findElement(By.xpath(".//*[@id='container']/div/header/div[1]/div[2]/div/div/div[2]/form/div/div[1]/div/input")).sendKeys("Lenovo A6000");
		dr.findElement(By.name("q")).submit();
		//*[@id="container"]/div/div[2]/div[2]/div/div[2]/div[2]/div/section/ul/li[2]
		List <WebElement> options=dr.findElements(By.className("_2Ylh8t"));
		for(int i=0;i<options.size();i++)
		{
			System.out.println(options.get(i).getText());
		}
		Thread.sleep(20000);
		dr.quit();
	}
	public void itemSearch(WebDriver newdriver) throws InterruptedException
	{
		//WebElement we=newdriver.findElement(By.xpath(".//*[@id='container']/div/header/div[2]/div"));
		newdriver.findElement(By.xpath(".//*[@id='container']/div/header/div[1]/div[2]/div/div/div[2]/form/div/div[1]/div/input")).sendKeys("Lenovo A6000");
		Thread.sleep(20000);
		newdriver.findElement(By.name("q")).submit();
	}
	public void snapshot(String address,WebDriver newdriver)
	{
		File src=((TakesScreenshot)newdriver).getScreenshotAs(OutputType.FILE);
		try {
			FileUtils.copyFile(src,new File(address+".png"));
		} catch (IOException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		newdriver=null;
	}
	public String getDate()
	{
		DateFormat dateFormat = new SimpleDateFormat("MM_dd_yyyy_HH_mm_ss");
		Date date = new Date();
		String date1=dateFormat.format(date);
		return date1;
		
	}
}