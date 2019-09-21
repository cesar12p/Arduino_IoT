#include <SPI.h>
#include <Ethernet.h>
#include <DHT.h>
int Foco=2;
byte mac[] = { 0xDE, 0xAD, 0xBE, 0xEF, 0xFE, 0xEE };
IPAddress server(35,188,90,189);
IPAddress ip(192, 168, 0, 7);
byte gateway[] = { 192, 168, 0, 1 };
byte subnet[] = { 255, 255, 255, 0 };
//byte myDns[] = { 192, 168, 1, 252 };
byte myDns[] = { 189, 198, 130, 3 };
EthernetClient client;
bool printWebData = true;

void setup() {
   Serial.begin(9600);
   pinMode(Foco,OUTPUT);
   while (!Serial) {
  }
  Ethernet.begin(mac, ip, myDns, gateway, subnet);
  
}
 
void loop() {
  //Sensor Fuego


  Serial.print("Connecting from ");
  Serial.print(ip);
  Serial.print(" to ");
  Serial.println(server);
  if (client.connect(server, 80)) {
    client.print("GET /BajarDatos.php?");
    client.println(" HTTP/1.1");
    client.print("Host: ");
    client.println(server);
    client.println("Connection: close");
    client.println();
  } else {
        Serial.println("connection failed");
  }
  while (client.connected()) {
    int len = client.available();
    if (len > 0) {
      byte buffer[80];
      if (len > 80) len = 80;
      client.read(buffer, len);
      if (printWebData) {
         Serial.println("Empieza buffer");
        Serial.write(buffer, 1);
        char buf [len];
        sprintf(buf,buffer);
        char* v=buf;
        Serial.println();
        Serial.println(len);
        Serial.println("Termina buffer");
        if(strstr(v,"N1\"1\"")){ //Bomba
          digitalWrite(Foco, HIGH);
          Serial.println("Encendiendo Foco");
        }
        if(strstr(v,"N1\"0\"")){
          digitalWrite(Foco, LOW);
          Serial.println("Apagando Foco");
        }
      }
    }
  }
  
  
  if (!client.connected()) {
    Serial.println("Disconnecting...");
    Serial.println();
    client.stop();
    delay(10000);
  }
   

}
