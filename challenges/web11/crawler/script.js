const puppeteer = require('puppeteer');
const schedule = require('node-schedule');
const url_base = process.env.APP_URL_BASE;
const pass_file = process.env.PASS;

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
  await page.goto(`http://${url_base}/${pass_file}`, {waitUntil: 'networkidle2'});
  
  var password = await page.$eval('pre', item => {
    return item.textContent;
  });
  console.log("admin password => " + password);
  
  await page.goto(`http://${url_base}`, {waitUntil: 'networkidle2'});
  await page.type('input[name="userid"]', 'admin');
  await page.type('input[name="password"]', password);
  await page.click('button[name="submit"]');
  await page.waitFor(3000);
  await page.goto(`http://${url_base}/message.php`, {waitUntil: 'networkidle2'});
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
  await page.goto(`http://${url_base}/c0b0cc46d638c27d7b439331656755e2.php`);
  await page.goto(`http://${url_base}/`);
  console.log("message deleted!!");
  browser.close();
}

schedule.scheduleJob('*/3 * * * *', function(){
  crawling();
})

schedule.scheduleJob('*/10 * * * *', function(){
  deleteMessage();
})