<?php

$url = 'https://api.open-meteo.com/v1/forecast?latitude=45.5906&longitude=17.225&current=temperature_2m,precipitation&hourly=temperature_2m,precipitation_probability,precipitation&daily=temperature_2m_max,temperature_2m_min,sunrise,sunset,uv_index_max,precipitation_probability_max,wind_speed_10m_max&timezone=Europe%2FBerlin';

$response = file_get_contents($url);

if ($response === false) {
    die('Greška prilikom dohvaćanja podataka.');
}

$weather_data = json_decode($response, true);

$current_temperature = $weather_data['current']['temperature_2m'];
echo "Trenutna temperatura: {$current_temperature}°C\n";

echo "<table border='1'>";
echo "<tr>
    <th>Dan</th>
    <th>Datum</th>
    <th>Max temp (°C)</th>
    <th>Min temp (°C)</th>
    <th>Izlazak sunca</th>
    <th>Zalazak sunca</th>
    <th>UV index max</th>
    <th>Mogućnost oborina</th>
    <th>Brzina vjetra</th>
  </tr>";
for ($i = 0; $i < count($weather_data['daily']['time']); $i++) {
    $date = date('Y-m-d', strtotime($weather_data['daily']['time'][$i]));
    $day = date('l', strtotime($weather_data['daily']['time'][$i]));
    $max_temp = $weather_data['daily']['temperature_2m_max'][$i];
    $min_temp = $weather_data['daily']['temperature_2m_min'][$i];
    $sunrise = date('H:i', strtotime($weather_data['daily']['sunrise'][$i]));
    $sunset = date('H:i', strtotime($weather_data['daily']['sunset'][$i]));
    $uv_index_max = $weather_data['daily']['uv_index_max'][$i];
    $precipitation_probability_max = $weather_data['daily']['precipitation_probability_max'][$i];
    $wind_speed_10m_max = $weather_data['daily']['wind_speed_10m_max'][$i];
    echo "<tr>
        <td>{$day}</td>
        <td>{$date}</td>
        <td>{$max_temp}°C</td>
        <td>{$min_temp}°C</td>
        <td>{$sunrise}</td>
        <td>{$sunset}</td>
        <td>{$uv_index_max}</td>
        <td>{$precipitation_probability_max}%</td>
        <td>{$wind_speed_10m_max}m/s</td>
    </tr>";
}
echo "</table>";
?>