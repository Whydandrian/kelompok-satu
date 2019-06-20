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

    }
}
