package com.example.vetathome;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class MainActivity extends AppCompatActivity {

    Button doctorSignup;
    Button userSignup;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        doctorSignup = findViewById(R.id.doctorSignup);
        userSignup = findViewById(R.id.userSignup);

        doctorSignup.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
              Intent intent = new Intent(MainActivity.this,DoctorLogin.class);
              startActivity(intent);
            }
        });
        userSignup.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(MainActivity.this,UserLogin.class);
                startActivity(intent);
            }
        });
    }
}