package selenium_try;

import org.testng.annotations.BeforeTest;
import org.testng.annotations.Test;
import org.testng.AssertJUnit;

import java.awt.Robot;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebDriverException;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.firefox.FirefoxDriver;
import org.testng.Assert;
import org.testng.annotations.Test;

public class NewTest {
    public String baseUrl = "http://flipkart.com/";
    //String driverPath = "C:\\geckodriver.exe";
    public WebDriver driver ; 
    String newXpath="html/body/div[2]/div/div/div/div/div[2]/div/form/";
    TestClass testClass=new TestClass();
    String location="D:\\";
  @BeforeTest
  public void login()throws WebDriverException, InterruptedException
  {
    	System.setProperty("webdriver.chrome.driver", "‪C:\\Users\\User\\Downloads\\chromedriver_win32 (3)\\chromedriver.exe");
        driver = new ChromeDriver();
        driver.get(baseUrl);
        driver.manage().window().maximize();
        testClass.snapshot(location+testClass.getDate(), driver);
        Thread.sleep(5000);
        driver.findElement(By.linkText("Log In")).click();
        testClass.snapshot(location+testClass.getDate(), driver);
        if(driver.findElement(By.xpath("html/body/div[2]/div/div/div/div/div[2]/div/form/div[1]/input")).isDisplayed())
        {
        	driver.findElement(By.xpath(newXpath+"div[1]/input")).sendKeys("adhikaryswarnajit18@gmail.com");
        	driver.findElement(By.xpath(newXpath+"div[2]/input")).sendKeys("JAE3BAUU");
        	testClass.snapshot(location, driver);
        	Thread.sleep(5000);
        	driver.findElement(By.xpath(newXpath+"div[3]/button")).click();
        }
      ///
  }
  @Test
  public void f() throws InterruptedException {
	  
	   System.out.println("launching google browser"); 
	      //System.setProperty("webdriver.firefox.marionette", driverPath);
	      
	      //driver.get(baseUrl);
	      //String expectedTitle = "Welcome: Mercury Tours";
	      //String actualTitle = driver.getTitle();
	      //AssertJUnit.assertEquals(actualTitle, expectedTitle);
	   
	   testClass.itemSearch(driver);
	   testClass.snapshot(location+testClass.getDate(), driver);
	   Thread.sleep(5000);
	   testClass.snapshot(location+testClass.getDate(), driver);
	   Thread.sleep(5000);
	      driver.quit();
  }
}
