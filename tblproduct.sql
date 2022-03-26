--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'shirt size S', 'T1S', 'product-images/shirt1.jpg', 10.00),
(2, 'shirt size S', 'T2S', 'product-images/shirt2.jpg', 10.00),
(3, 'shirt size S', 'T3S', 'product-images/shirt3.jpg', 10.00),
(4, 'shirt size S', 'T4S', 'product-images/shirt4.jpg', 10.00),

(5, 'shirt size M', 'T1M', 'product-images/shirt1.jpg', 15.00),
(6, 'shirt size M', 'T2M', 'product-images/shirt2.jpg', 15.00),
(7, 'shirt size M', 'T3M', 'product-images/shirt3.jpg', 15.00),
(8, 'shirt size M', 'T4M', 'product-images/shirt4.jpg', 15.00),

(9,  'shirt size L', 'T1L', 'product-images/shirt1.jpg', 20.00),
(10, 'shirt size L', 'T2L', 'product-images/shirt2.jpg', 20.00),
(11, 'shirt size L', 'T3L', 'product-images/shirt3.jpg', 20.00),
(12, 'shirt size L', 'T4L', 'product-images/shirt4.jpg', 20.00);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;