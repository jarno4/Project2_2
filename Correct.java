import java.io.*;
import java.nio.charset.StandardCharsets;
import java.nio.file.Files;
import java.nio.file.Path;
import java.nio.file.Paths;
import java.util.Arrays;
import java.util.List;


public class Correct  {
    private static Data data;
    private static  String string;


    private int stn;
    private String date;
    private String time;
    private float temp;
    private float dewp;
    private float stp;
    private float slp;
    private float visib;
    private float wdsp;
    private float prcp;
    private float sndp;
    private float frshtt;
    private float cldc;
    private short wnddir;
    public Correct(String s){
        this.string=s;
        init();

    }
    public  void init(){



        stn=Integer.parseInt(getValueBetweenTags("<STN>","</STN>"));
        date=getValueBetweenTags("<DATE>","</DATE>");
        time=getValueBetweenTags("<TIME>","</TIME>");
        temp=Float.parseFloat(getValueBetweenTags("<TEMP>","</TEMP>"));
        dewp=Float.parseFloat(getValueBetweenTags("<DEWP>","</DEWP>"));
        stp=Float.parseFloat(getValueBetweenTags("<STP>","</STP>"));
        slp=Float.parseFloat(getValueBetweenTags("<SLP>","</SLP>"));
        visib=Float.parseFloat(getValueBetweenTags("<VISIB>","</VISIB>"));
        wdsp=Float.parseFloat(getValueBetweenTags("<WDSP>","</WDSP>"));
        prcp=Float.parseFloat(getValueBetweenTags("<PRCP>","</PRCP>"));
        sndp=Float.parseFloat(getValueBetweenTags("<SNDP>","</SNDP>"));
        frshtt=Float.parseFloat(getValueBetweenTags("<FRSHTT>","</FRSHTT>"));
        cldc=Float.parseFloat(getValueBetweenTags("<CLDC>","</CLDC>"));
        wnddir=Short.parseShort(getValueBetweenTags("<WNDDIR>","</WNDDIR>"));



        data = new Data(stn,date,time,temp,dewp,stp,slp,visib,wdsp,prcp,sndp,frshtt,cldc,wnddir);
        try {
            CreatFile();
        } catch (IOException e) {
            e.printStackTrace();
        }


    }

public  String getValueBetweenTags(String openTag,String CloseTag) {

    int startPosition = string.indexOf(openTag) + openTag.length();
    int endPosition = string.indexOf(CloseTag, startPosition);
    String subS = string.substring(startPosition, endPosition);
    return subS;

}

public void CreatFile() throws IOException {
    long time = System.currentTimeMillis();

    List<String> lines = Arrays.asList(data.getStn()+"", data.getDate()+"",data.getTime()+"",data.getTemp()+"", data.getDewp()+"",data.getStp()+"",data.getSlp()+"", data.getVisib()+"",
            data.getWdsp()+"",data.getPrcp()+"",data.getSndp()+"",data.getFrshtt()+"", data.getCldc()+"",data.getWnddir()+"");
    Path file = Paths.get(data.getStn()+"/"+time+".txt");
    File f = new File(data.getStn()+"/");
    f.mkdirs();
    Files.write(file, lines, StandardCharsets.UTF_8);


}





}
