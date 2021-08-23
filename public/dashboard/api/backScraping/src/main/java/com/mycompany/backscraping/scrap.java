package com.mycompany.backscraping;

import com.mycompany.backscraping.ConexaoDAO;
import java.io.IOException;
import java.sql.SQLException;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.swing.JOptionPane;
import static com.mycompany.backscraping.ConexaoDAO.con;
import static com.mycompany.backscraping.ConexaoDAO.pst;
import org.jsoup.Jsoup;
import org.jsoup.nodes.Document;
import org.jsoup.nodes.Element;

public class scrap {
    public static void main(String[] Args){
        //addMunicipio();
        addDados();
                
     }
    public static void addDados(){ // DEVE SER EXECUTADO APENAS UMA VEZ
        final String url = "http://www.bde.pe.gov.br/visualizacao/Visualizacao_formato2.aspx?codFormatacao=1554&CodInformacao=1294&Cod=3";
        try {
            final Document document = Jsoup.connect(url).get();
            //System.out.println(document.html());

            for(Element row : document.select(".crosstab td")){
                
                    if(row.select("td.dadoNum_n1_par:nth-of-type(2)").text().equals("")){
                    continue;
                    }else{
                
                    String sqlInsert = "INSERT INTO pibdez (valpibdez) VALUES(?)"; // QUERY SQL DE INSERÃ‡ÃƒO DE DADOS, NESSE CASO OS DADOS DO ANO PIB 2010
                    //String sqlDelete = "DELETE FROM municipios WHERE nome = ''";
                    con = new ConexaoDAO().conectaBD();
                    
                    
                    
                    final String ano10 = row.select("td.dadoNum_n1_par:nth-of-type(2)").text();
                    String resultAnoDez = ano10.replaceAll("\\p{Punct}","");
                    
                    System.out.println(resultAnoDez);
                    
                    try{
                        pst = con.prepareStatement(sqlInsert);
                        //pst = con.prepareStatement(sqlDelete);
                        pst.setString(1,resultAnoDez);
                        
            
                        pst.execute();
                        pst.close();
                    }catch(SQLException e){
                        System.out.println(e);
                    }
                    
                    }
                
            }
        } catch (IOException ex) {
            Logger.getLogger(scrap.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
    
    public static void addMunicipio(){ // DEVE SER EXECUTADO APENAS UMA ÃšNICA VEZ
        final String url = "http://www.bde.pe.gov.br/visualizacao/Visualizacao_formato2.aspx?codFormatacao=1554&CodInformacao=1294&Cod=3";
        try {
            final Document document = Jsoup.connect(url).get();
            //System.out.println(document.html());
            for(Element row : document.select(".crosstab td")){
                if(row.select("td.dadoNum_n1_par:nth-of-type(1)").text().equals("")){
                    continue;
                }else{
                    String sqlInsert = "INSERT INTO nomemuni (nome) VALUES(?)"; // QUERY SQL PARA INSERIR TODOS OS NOMES DA REGIÃƒO METROPOLITANA DO RECIFE
                    //String sqlDelete = "DELETE FROM municipios WHERE nome = ''";
                    con = new ConexaoDAO().conectaBD();
                    
                    
                    
                    final String muni = row.select("td.dadoNum_n1_par:nth-of-type(1)").text();
                    //final String ano10 = row.select("td.dadoNum_n1_par:nth-of-type(2)").text();
                    System.out.println(muni + ""/* + ano10*/);
                    
                    try{
                        pst = con.prepareStatement(sqlInsert);
                        //pst = con.prepareStatement(sqlDelete);
                        pst.setString(1,muni);
                        
                        
                        pst.execute();
                        pst.close();
                    }catch(SQLException e){
                        JOptionPane.showMessageDialog(null, e);
                    }
                    }
                
            }
        } catch (IOException ex) {
            Logger.getLogger(scrap.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    
    
}
