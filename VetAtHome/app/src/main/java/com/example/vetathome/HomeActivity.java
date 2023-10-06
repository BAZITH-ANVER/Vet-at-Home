package com.example.vetathome;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class HomeActivity extends AppCompatActivity {

    Button profileBT;
    Button doctorBT;
    Button requestBT;
    Button bookingBT;
    Button reschBT;
    Button feedbackBT;

    private GlobalPreference globalPreference;
    private String uid;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_home);

        globalPreference = new GlobalPreference(this);
        uid = globalPreference.getID();

        profileBT = findViewById(R.id.profileButton);
        doctorBT = findViewById(R.id.viewDoctor);
        requestBT = findViewById(R.id.requestButton);
        bookingBT = findViewById(R.id.detailsButton);
        reschBT = findViewById(R.id.schButton);
        feedbackBT = findViewById(R.id.feedbackButton);

        profileBT.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(HomeActivity.this,WebActivity.class);
                intent.putExtra("function","profile");
                intent.putExtra("user_id","uid");
                startActivity(intent);
            }
        });

        doctorBT.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(HomeActivity.this,WebActivity.class);
                intent.putExtra("function","booking");
                startActivity(intent);
            }
        });
        requestBT.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(HomeActivity.this,WebActivity.class);
                intent.putExtra("function","");
                startActivity(intent);
            }
        });

        bookingBT.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(HomeActivity.this,WebActivity.class);
                intent.putExtra("function","");
                startActivity(intent);
            }
        });

        reschBT.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(HomeActivity.this,WebActivity.class);
                intent.putExtra("function","resheule");
                startActivity(intent);
            }
        });
        feedbackBT.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(HomeActivity.this,WebActivity.class);
                intent.putExtra("function","feeedback");
                startActivity(intent);
            }
        });
    }
}