
import java.net.*;

public class Server {

    public static void main(String[] args) {
        try {
            ServerSocket serverSocket = new ServerSocket(7789);
            System.out.println("Server Socket has been created");
            while (true) {

                Socket socket = serverSocket.accept();
                WorkerThread w = new WorkerThread(socket);
                w.start();


            }
        } catch (Exception e) {
            e.printStackTrace();
        }
    }

}