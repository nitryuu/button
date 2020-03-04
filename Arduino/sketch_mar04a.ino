#include <ESP8266WiFi.h>
#include <ESP8266HTTPClient.h>
#include <ArduinoJson.h>

const char* ssid = "ZTE_2.4G_eJwdWu";
const char* password = "12354678@*#$ZaZ";

void setup() 
{
  Serial.begin(115200);
  WiFi.begin(ssid, password);

  while (WiFi.status() != WL_CONNECTED) 
  {
    delay(1000);
    Serial.println("Connecting...");
  }
}

void loop() 
{
  if (WiFi.status() == WL_CONNECTED) 
  {
    HTTPClient http; //Object of class HTTPClient
    
    String link = "http://192.168.1.2/button/public/api/sendData";
    
    http.begin(link);
    int httpCode = http.GET();

    if (httpCode > 0) 
    {
      const size_t bufferSize = JSON_OBJECT_SIZE(2) + JSON_OBJECT_SIZE(3) + JSON_OBJECT_SIZE(5) + JSON_OBJECT_SIZE(8) + 370;
      DynamicJsonBuffer jsonBuffer(bufferSize);
      JsonObject& root = jsonBuffer.parseObject(http.getString());
 
      String value = root["value"]; 

      if(value == "hidup")
      {
        Serial.println(" yee aku hidup ");
      }else if(value == "mati")
      {
        Serial.println(" aku mati :( ");
      }
    }
    http.end(); //Close connection
  }
  delay(5000);
}
