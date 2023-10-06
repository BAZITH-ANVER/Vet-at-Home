package com.example.vetathome;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class HomeActivity2 extends AppCompatActivity {

    Button profileBT;
    Button patientBT;
    Button paymentBT;
    Button feedbackBT;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_home2);

        profileBT = findViewById(R.id.dprofileButton);
        patientBT = findViewById(R.id.patientButton);
        paymentBT = findViewById(R.id.paymentButton);
        feedbackBT = findViewById(R.id.vfeedbackButton);

        profileBT.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(HomeActivity2.this,WebActivity.class);
                intent.putExtra("function","doctorprofile");
                intent.putExtra("user_id","uid");
                startActivity(intent);
            }
        });

        patientBT.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(HomeActivity2.this,WebActivity.class);
                intent.putExtra("function","viewbooking");
                startActivity(intent);
            }
        });

        paymentBT.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(HomeActivity2.this,WebActivity.class);
                intent.putExtra("function","viewpayment");
                startActivity(intent);
            }
        });
        feedbackBT.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(HomeActivity2.this,WebActivity.class);
                intent.putExtra("function","viewfeedback");
            }
        });
    }
}