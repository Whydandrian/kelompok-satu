package com.example.e_gold;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {
    // deklarasi tombol
    private Button btn_login, btn_register;
    private EditText email, password;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        //inisial tombol
        btn_login = (Button) findViewById(R.id.btnLogin);
        btn_register = (Button) findViewById(R.id.btnRegister);

        email = (EditText) findViewById(R.id.txtemail);
        password = (EditText) findViewById(R.id.etPassword);

        // function tombol
        btn_login.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                if(email.getText().toString().equals("safitrieka656@gmail.com")&& password.getText().toString().equals("12345")){
                    Intent email = new Intent(MainActivity.this, menukategori.class);
                    startActivity(email);

                    Toast.makeText(getApplicationContext(),"Login Berhasil!", Toast.LENGTH_SHORT).show();
                }else{
                    Toast.makeText(getApplicationContext(),"Login Gagal", Toast.LENGTH_SHORT).show();
                    email.setText("");
                    password.setText("");
                }
            }
        });

        btn_register.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent iRegister = new Intent(getApplicationContext(), Register.class);
                startActivity(iRegister);
            }
        });
    }
}
