import 'package:flutter/material.dart';

void main() => runApp(const MyApp());

class MyApp extends StatelessWidget {
  const MyApp({super.key});

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'Flutter Demo',
      debugShowCheckedModeBanner: true,
      theme: ThemeData(
        primarySwatch: Colors.purple,
      ),
      home: const Home(),
    );
  }
}

class Home extends StatelessWidget {
  const Home({super.key});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(title: const Text('DICT')),
      body: const Center(
        child: Column(
          children: [
            Text(
              'Department of Information and Communications Technology',
            ),
            Text(
              'Region IX and BASULTA',
            ),
            Text(
              'Zamboanga City',
            ),
          ],
        ),
      ),
    );
  }
}
