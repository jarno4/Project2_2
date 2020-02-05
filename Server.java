import org.w3c.dom.Document;
import org.xml.sax.InputSource;

import javax.xml.parsers.DocumentBuilder;
import javax.xml.parsers.DocumentBuilderFactory;
import javax.xml.transform.Transformer;
import javax.xml.transform.TransformerException;
import javax.xml.transform.TransformerFactory;
import javax.xml.transform.dom.DOMSource;
import javax.xml.transform.stream.StreamResult;
import java.io.*;
import java.net.*;

public class Server {
    private static StringBuilder stringBuilder;
    public static void main(String[] args) {
        try {
            ServerSocket serverSocket = new ServerSocket(7789);
            System.out.println("Server Socket has been created");
            while (true) {

                Socket socket = serverSocket.accept();
                System.out.println("Server Socket has been Accepted");

                BufferedReader in = new BufferedReader(
                        new InputStreamReader(
                                socket.getInputStream()));
                System.out.println("Server Socket has been f");

                while (true) {

                    String str = in.readLine();
                    if ( str.contains("version")) {
                        stringBuilder = new StringBuilder();
                    }
                    stringBuilder.append(str).append("\n");


                  //  System.out.println(str);
                    if(str.equals("</WEATHERDATA>")){
                        String sss =stringBuilder.toString();
                        System.out.println(sss);

                    //Use method to convert XML string content to XML Document object

                    Document doc = convertStringToXMLDocument( sss );
                    CreatXmlFile(doc);



                    }

                    if (str == null)
                        break;
                }
                System.out.println("Server Socket has been close in ");

                in.close();
                socket.close();
                System.out.println("Server Socket has been close");

            }
        } catch (Exception e) {
        }
    }

    private static Document convertStringToXMLDocument(String xmlString) {
        //Parser that produces DOM object trees from XML content
        DocumentBuilderFactory factory = DocumentBuilderFactory.newInstance();

        //API to obtain DOM Document instance
        DocumentBuilder builder = null;
        try {
            //Create DocumentBuilder with default configuration
            builder = factory.newDocumentBuilder();

            //Parse the content to Document object
            Document doc = builder.parse(new InputSource(new StringReader(xmlString)));
            return doc;
        } catch (Exception e) {
            e.printStackTrace();
        }
        return null;
    }

    private static void CreatXmlFile(Document doc) throws TransformerException, IOException {
        long time= System.currentTimeMillis();

        File xmlFile = new File(time+".xml");
        xmlFile.createNewFile();

        TransformerFactory transformerFactory = TransformerFactory.newInstance();
        Transformer transformer = transformerFactory.newTransformer();
        DOMSource domSource = new DOMSource(doc);
        StreamResult streamResult = new StreamResult(xmlFile);
        transformer.transform(domSource, streamResult);
        System.out.println("Done creating XML File");
    }
}