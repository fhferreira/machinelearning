<?php

namespace MachineLearning\Clustering;

use MachineLearning\MachineLearning;
use MachineLearning\Data\Dataset;

/**
 * Base class for the clustering algortims.
 */
class Cluster extends MachineLearning {

  public $trainingData;
  public $validationData;
  public $testData;

  public $clusters;

  /**
   * Add trainings data to train the clusters.
   *
   * @param Dataset $dataset
   */
  public function addTrainingData(Dataset $dataset) {
    $this->trainingData = $dataset;
  }

  /**
   * Add validation data to validate the clusters.
   *
   * @param Dataset $dataset
   */
  public function addValidationData(Dataset $dataset) {
    $this->validationData = $dataset;
  }

  /**
   * Add test data.
   *
   * @param Dataset $dataset
   */
  public function addTestData(Dataset $dataset) {
    $this->testData = $dataset;
  }
}