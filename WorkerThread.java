import java.io.*;
import java.net.Socket;
import java.util.Arrays;
import java.util.List;

public class WorkerThread extends Thread {
    private Socket socket;
    private static StringBuffer stringBuilder;
    private Data data;

    private static String[] listOfStation = {"726720","726766","726770","726775","726776","726777","726785","726790","726796","726797","726798","726810","726813","726815","726816",
            "726817","726818","726830","726835","726837","726838","726873","726871","726865"};



    public WorkerThread(Socket socket) {
        this.socket = socket;

    }

    @Override
    public void run() {
       init();
    }

public synchronized void init(){


    System.out.println("Server Socket has been Accepted");

    BufferedReader in = null;
    try {
        in = new BufferedReader(
                new InputStreamReader(
                        socket.getInputStream()));
    } catch (IOException e) {
        e.printStackTrace();
    }
    System.out.println("Server Socket has been f");
    stringBuilder = new StringBuffer();

    while (true) {

        String str = null;
        try {
            str = in.readLine();
        } catch (IOException e) {
            e.printStackTrace();
        }
        if (str != null) {
            if (str.contains("<MEASUREMENT>")) {

                stringBuilder = new StringBuffer();
            }
            stringBuilder.append(str).append("\n");

            if (str.contains("</MEASUREMENT>") ) {

                String sss = stringBuilder.toString();
                //Use method to convert XML string content to XML Document object

                if(Arrays.stream(listOfStation).parallel().anyMatch(sss::contains)) {
                    System.out.println(sss);

                    new Correct(sss);

                }
            }
        } else
            break;
    }
    System.out.println("Server Socket is  closed  ");

    try {
        in.close();
    } catch (IOException e) {
        e.printStackTrace();
    }
    try {
        socket.close();
    } catch (IOException e) {
        e.printStackTrace();
    }
    System.out.println("Server Socket is been closed");
}
}
