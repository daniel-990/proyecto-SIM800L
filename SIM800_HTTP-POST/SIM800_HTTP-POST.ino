//For more Information visit https://www.aeq-web.com/sim800-arduino-gprs/
// https://www.youtube.com/watch?v=jHvoLgOWdMM

#include <SoftwareSerial.h>
#include <Wire.h>

SoftwareSerial mySerial(3, 2);            // RX, TX Pins
String apn = "internet.comcel.com.co";       //APN
String apn_u = "comcel";                     //APN-Username
String apn_p = "comcel";                     //APN-Password
String url = "http://181.140.22.148/SIM800-PHP-Testserver/index.php";  //URL for HTTP-POST-REQUEST
String data1;   //String for the first Paramter (e.g. Sensor1)
String data2;   //String for the second Paramter (e.g. Sensor2)



void setup() {
  // Open serial communications and wait for port to open:
  Serial.begin(9600);
  // set the data rate for the SoftwareSerial port
  mySerial.begin(9600);
  delay(10000);
}

void loop() { // run over and over

  
    data1 = "123";
    data2 = "ABC";
    gsm_sendhttp(); //Start the GSM-Modul and start the transmisson
    delay(60000); //Wait one minute

}


void gsm_sendhttp() {
  
  
 
  mySerial.println("AT");
  runsl();//Print GSM Status an the Serial Output;
  delay(4000);
  mySerial.println("AT+SAPBR=3,1,Contype,GPRS");
  runsl();
  delay(100);
  mySerial.println("AT+SAPBR=3,1,APN," + apn);
  runsl();
  delay(100);
  mySerial.println("AT+SAPBR=3,1,USER," + apn_u); //Comment out, if you need username
  runsl();
  delay(100);
  mySerial.println("AT+SAPBR=3,1,PWD," + apn_p); //Comment out, if you need password
  runsl();
  delay(100);
  mySerial.println("AT+SAPBR =1,1");
  runsl();
  delay(100);
  mySerial.println("AT+SAPBR=2,1");
  runsl();
  delay(2000);
  mySerial.println("AT+HTTPINIT");
  runsl();
  delay(100);
  mySerial.println("AT+HTTPPARA=CID,1");
  runsl();
  delay(100);
  mySerial.println("AT+HTTPPARA=URL," + url);
  runsl();
  delay(100);
  mySerial.println("AT+HTTPPARA=CONTENT,application/x-www-form-urlencoded");
  runsl();
  delay(100);
  mySerial.println("AT+HTTPDATA=192,10000");
  runsl();
  delay(100);
  mySerial.println("params=" + data1 + "~" + data2);
  runsl();
  delay(10000);
  mySerial.println("AT+HTTPACTION=1");
  runsl();
  delay(5000);
  mySerial.println("AT+HTTPREAD");
  runsl();
  delay(100);
  mySerial.println("AT+HTTPTERM");
  runsl();
  delay(1000);
  mySerial.println("AT+SAPBR=0,1");
  runsl();
}

//Print GSM Status
void runsl() {
  while (mySerial.available()) {
    Serial.write(mySerial.read());
  }

}
