package com.example.e_gold;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.ImageView;

public class menukategori extends AppCompatActivity {

    
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_menukategori);

        ImageView Anting = (ImageView) findViewById(R.id.anting);

        Anting.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(menukategori.this, anting.class);
                startActivity(intent);
            }
        });

        ImageView Cincin = (ImageView) findViewById(R.id.cincin);

        Cincin.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(menukategori.this, cincin.class);
                startActivity(intent);
            }
        });

        ImageView Gelang = (ImageView) findViewById(R.id.gelang);

        Gelang.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(menukategori.this, gelang.class);
                startActivity(intent);
            }
        });

        ImageView Kalung = (ImageView) findViewById(R.id.kalung);

        Kalung.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(menukategori.this, kalung.class);
                startActivity(intent);
            }
        });

        ImageView Liontin = (ImageView) findViewById(R.id.liontin);

        Liontin.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(menukategori.this, liontin.class);
                startActivity(intent);
            }
        });
    }
}
