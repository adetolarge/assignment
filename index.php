<?php
  function calculateGradePoint($score) {
    if ($score >= 70 && $score < 100) {
      return 5; // A
    } elseif ($score >= 60 && $score < 70) {
      return 4; // B
    } elseif ($score >= 50 && $score < 60) {
      return 3; // C
    } elseif ($score >= 45 && $score < 50) {
      return 2; // D
    } elseif ($score >= 40 && $score < 45) {
      return 1; // E
    } else {
      return 0; // F
    }
  }


  function calculateCGPA($scores) {
    $totalGradePoints = 0;
    foreach ($scores as $score) {
      $totalGradePoints = $totalGradePoints + calculateGradePoint($score);
    }
    return $totalGradePoints / count($scores);
  }
