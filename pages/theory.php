<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<?php 
    include('../assets/header.php');
    ?>
      <section class="text-gray-600 body-font">
        <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">
          
          <div class="text-center lg:w-2/3 w-full">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Theory</h1>
            <p class="mb-8 text-left leading-relaxed">Kmeans algorithm is an iterative algorithm that tries to partition the dataset into Kpre-defined distinct non-overlapping subgroups (clusters) where each data point belongs to only one group. It tries to make the intra-cluster data points as similar as possible while also keeping the clusters as different (far) as possible. It assigns data points to a cluster such that the sum of the squared distance between the data points and the cluster’s centroid (arithmetic mean of all the data points that belong to that cluster) is at the minimum. The less variation we have within clusters, the more homogeneous (similar) the data points are within the same cluster. <br><br>

                The way kmeans algorithm works is as follows:<br>
                <br>
                Specify number of clusters K.<br>
                Initialize centroids by first shuffling the dataset and then randomly selecting K data points for the centroids without replacement.<br>
                Keep iterating until there is no change to the centroids. i.e assignment of data points to clusters isn’t changing.<br>
                Compute the sum of the squared distance between data points and all centroids.<br>
                Assign each data point to the closest cluster (centroid).<br>
                Compute the centroids for the clusters by taking the average of the all data points that belong to each cluster.<br>
                <br><br>
                The approach kmeans follows to solve the problem is called Expectation-Maximization. The E-step is assigning the data points to the closest cluster. The M-step is computing the centroid of each cluster. Below is a break down of how we can solve it mathematically (feel free to skip it).<br>
                <br>
                The objective function is:<br>
                <img class="object-center" src="https://miro.medium.com/max/640/1*myXqNCTZH80uvO2QyU6F5Q.png">
                <br>
                <br>
                where wik=1 for data point xi if it belongs to cluster k; otherwise, wik=0. Also, μk is the centroid of xi’s cluster.<br>
                <br>
                It’s a minimization problem of two parts. We first minimize J w.r.t. wik and treat μk fixed. Then we minimize J w.r.t. μk and treat wik fixed. Technically speaking, we differentiate J w.r.t. wik first and update cluster assignments (E-step). Then we differentiate J w.r.t. μk and recompute the centroids after the cluster assignments from previous step (M-step). Therefore, E-step is:<br>
                <img class="object-center" src="https://miro.medium.com/max/720/1*dvqCl-vFbxQp7Lx-2RpnEA.png">
                <br>
                <br>
                In other words, assign the data point xi to the closest cluster judged by its sum of squared distance from cluster’s centroid.<br>
                <br>
                And M-step is:<br>
                <img class="object-center" src="https://miro.medium.com/max/720/1*fjTYV5rKOtMjCUsk3LIp_w.png">
                <br>
                <br>
                Which translates to recomputing the centroid of each cluster to reflect the new assignments.<br>
                <br>
                Few things to note here:<br>
                <br>
                Since clustering algorithms including kmeans use distance-based measurements to determine the similarity between data points, it’s recommended to standardize the data to have a mean of zero and a standard deviation of one since almost always the features in any dataset would have different units of measurements such as age vs income.<br>
                Given kmeans iterative nature and the random initialization of centroids at the start of the algorithm, different initializations may lead to different clusters since kmeans algorithm may stuck in a local optimum and may not converge to global optimum. Therefore, it’s recommended to run the algorithm using different initializations of centroids and pick the results of the run that that yielded the lower sum of squared distance.<br>
                Assignment of examples isn’t changing is the same thing as no change in within-cluster variation:<br>
                
                <img class="object-center" src="https://miro.medium.com/max/640/1*zXm8f5juDf2mBO7odJpKkA.png">
            </p>
            
          </div>
        </div>
      </section>
      <?php include('../assets/footer.php'); ?>
</body>
</html>