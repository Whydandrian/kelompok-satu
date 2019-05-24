package com.example.layout2;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.GridLayout;

public class MainActivity extends AppCompatActivity {

    GridLayout mainGrid;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

    }

    public void Anting(View view) {
        Intent intent = new Intent(MainActivity.this, HalamanBaru.class);
        startActivity(intent);
    }

    public void Gelang(View view) {
        Intent intent = new Intent(MainActivity.this, HalamanBaru.class);
        startActivity(intent);
    }

    public void Cincin(View view) {
        Intent intent = new Intent(MainActivity.this, HalamanBaru.class);
        startActivity(intent);
    }

    public void Liontin(View view) {
        Intent intent = new Intent(MainActivity.this, HalamanBaru.class);
        startActivity(intent);
    }

    public void Kalung(View view) {
        Intent intent = new Intent(MainActivity.this, HalamanBaru.class);
        startActivity(intent);
    }
}
