const puppeteer = require('puppeteer');
const schedule = require('node-schedule');
const url_base = process.env.APP_URL_BASE;
const FLAG = process.env.FLAG;

async function crawling() {
  const browser = await puppeteer.launch({
    executablePath: '/usr/bin/chromium-browser',
    args: [
      '--disable-dev-shm-usage',
    //   '--no-sandbox',
    //   '--disable-setuid-sandbox'
    ]
  });
  const page = await browser.newPage();
  await page.setCookie({"domain": url_base, "name": "web03_session", "value": FLAG});
  await page.goto(`http://${url_base}/`);
  console.log("crawling finished!!");
  browser.close();
}

async function deleteMessage() {
  const browser = await puppeteer.launch({
    executablePath: '/usr/bin/chromium-browser',
    args: [
      '--disable-dev-shm-usage',
    //   '--no-sandbox',
    //   '--disable-setuid-sandbox'
    ]
  });
  const page = await browser.newPage();
  await page.goto(`http://${url_base}/a140872db281f3a2dda3f683cd2b76ef.php`);
  await page.goto(`http://${url_base}/`);
  console.log("message deleted!!");
  browser.close();
}

schedule.scheduleJob('*/3 * * * *', function(){
  crawling();
})

schedule.scheduleJob('*/20 * * * *', function(){
  deleteMessage();
})