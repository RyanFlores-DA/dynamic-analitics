
package com.mycompany.backscraping;

public class configs {
    private String url;
    private String user;

    public String getUser() {
        return user;
    }

    public String getPass() {
        return pass;
    }

    private String pass;

    public String getUrl() {
        return url;
    }
    
    public void conf(){
        this.url = "jdbc:mysql://localhost/municipios";
        this.pass = "r@M!c#fl0res";
        this.user = "root";
    }
    
}
