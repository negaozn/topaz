-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Set-2021 às 04:35
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `topaz`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `desafio_tpz`
--

CREATE TABLE `desafio_tpz` (
  `id_event` varchar(8) DEFAULT NULL,
  `date_event` varchar(19) DEFAULT NULL,
  `event_type` varchar(18) DEFAULT NULL,
  `value` varchar(5) DEFAULT NULL,
  `user` varchar(32) DEFAULT NULL,
  `device_id` varchar(32) DEFAULT NULL,
  `latitude` varchar(23) DEFAULT NULL,
  `longitude` varchar(22) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `desafio_tpz`
--

INSERT INTO `desafio_tpz` (`id_event`, `date_event`, `event_type`, `value`, `user`, `device_id`, `latitude`, `longitude`) VALUES
('id_event', 'date_event', 'event_type', 'value', 'user', 'device_id', 'latitude', 'longitude'),
('1', '2021-08-06T18:10:47', 'Login', '', 'f8032d5cae3de20fcec887f395ec9a6a', '2a645dc95b8429aec0c92527a7fb3d6c', '-2.359.213.958.236.620', '-4.664.815.051.794.960'),
('2', '2021-08-06T18:11:43', 'Saldo', '', 'f8032d5cae3de20fcec887f395ec9a6a', '2a645dc95b8429aec0c92527a7fb3d6c', '-235.921.395.198.263', '-4.664.920.872.774'),
('3', '2021-08-06T18:12:45', 'TED', '450', 'f8032d5cae3de20fcec887f395ec9a6a', '2a645dc95b8429aec0c92527a7fb3d6c', '-2.359.215.498.435', '-4.664.815.023.423.460'),
('4', '2021-08-06T18:13:23', 'Extrato', '', 'f8032d5cae3de20fcec887f395ec9a6a', '2a645dc95b8429aec0c92527a7fb3d6c', '-235.921.391.234.443', '-466.481.502.345.235'),
('5', '2021-08-07T12:51:12', 'Login', '', 'f8032d5cae3de20fcec887f395ec9a6a', 'bf8cb9213929214e341b0420c95822f9', '-1.669.827.078.881.230', '-49.277.590.924.234'),
('6', '2021-08-07T12:53:28', 'PIX', '2000', 'f8032d5cae3de20fcec887f395ec9a6a', 'bf8cb9213929214e341b0420c95822f9', '-16.698.270.788.852.300', '-49.277.590.956'),
('7', '2021-08-07T12:55:45', 'PIX', '2500', 'f8032d5cae3de20fcec887f395ec9a6a', 'bf8cb9213929214e341b0420c95822f9', '-16.698.270.788.567.500', '-492.775.909.297.327'),
('8', '2021-08-07T12:56:48', 'PIX', '3000', 'f8032d5cae3de20fcec887f395ec9a6a', 'bf8cb9213929214e341b0420c95822f9', '-16.698.270.789.801', '-4.927.759.092.402.380'),
('9', '2021-08-10T19:34:51', 'Login', '', 'f8032d5cae3de20fcec887f395ec9a6a', '2a645dc95b8429aec0c92527a7fb3d6c', '-23.592.139.510.854.700', '-4.664.815.051.794.960'),
('10', '2021-08-10T19:35:50', 'Extrato', '', 'f8032d5cae3de20fcec887f395ec9a6a', '2a645dc95b8429aec0c92527a7fb3d6c', '-23.592.139.234.234.500', '-466.481.505.179.234'),
('11', '2021-08-10T19:35:55', 'Saldo', '', 'f8032d5cae3de20fcec887f395ec9a6a', '2a645dc95b8429aec0c92527a7fb3d6c', '-23.589.277.198.392', '-466.481.505.178.678'),
('12', '2021-08-10T19:35:59', 'Extrato', '', 'f8032d5cae3de20fcec887f395ec9a6a', '2a645dc95b8429aec0c92527a7fb3d6c', '-235.921.395.108', '-46.648.150.513.457'),
('13', '2021-08-10T19:36:34', 'Saldo', '', 'f8032d5cae3de20fcec887f395ec9a6a', '2a645dc95b8429aec0c92527a7fb3d6c', '-23,5914323', '-46.648.150.575.678'),
('14', '2021-08-10T19:37:20', 'Extrato', '', 'f8032d5cae3de20fcec887f395ec9a6a', '2a645dc95b8429aec0c92527a7fb3d6c', '-23.592.139.510.854', '-46.648.150.514.568'),
('15', '2021-08-10T19:39:26', 'Alteração de Senha', '', 'f8032d5cae3de20fcec887f395ec9a6a', '2a645dc95b8429aec0c92527a7fb3d6c', '-235.921.395.108', '-4.664.815.051.123'),
('16', '2021-08-10T19:40:51', 'Saldo', '', 'f8032d5cae3de20fcec887f395ec9a6a', '2a645dc95b8429aec0c92527a7fb3d6c', '-2.359.213.958.236.620', '-466.481.505.179.789'),
('17', '2021-08-11T12:41:13', 'Login', '', 'f8032d5cae3de20fcec887f395ec9a6a', '2a645dc95b8429aec0c92527a7fb3d6c', '-235.921.395.198.263', '-4.664.815.051.745'),
('18', '2021-08-11T12:42:34', 'Extrato', '', 'f8032d5cae3de20fcec887f395ec9a6a', '2a645dc95b8429aec0c92527a7fb3d6c', '-2.359.215.498.435', '-466.481.505.456'),
('19', '2021-08-11T12:45:45', 'Saldo', '', 'f8032d5cae3de20fcec887f395ec9a6a', '2a645dc95b8429aec0c92527a7fb3d6c', '-235.921.391.234.443', '-466.481.504.567'),
('20', '2021-08-11T12:47:23', 'Extrato', '', 'f8032d5cae3de20fcec887f395ec9a6a', '2a645dc95b8429aec0c92527a7fb3d6c', '-23.592.139.234.567.600', '-46.648.150.347'),
('21', '2021-08-11T12:51:12', 'Saldo', '', 'f8032d5cae3de20fcec887f395ec9a6a', '2a645dc95b8429aec0c92527a7fb3d6c', '-23.592.139.234.235.500', '-4.664.920.872.774'),
('22', '2021-08-11T12:55:25', 'Extrato', '', 'f8032d5cae3de20fcec887f395ec9a6a', '2a645dc95b8429aec0c92527a7fb3d6c', '-23.592.132.135.663.200', '-4.664.815.023.423.460'),
('23', '2021-08-11T12:56:13', 'Extrato', '', 'f8032d5cae3de20fcec887f395ec9a6a', '2a645dc95b8429aec0c92527a7fb3d6c', '-23.591.234.134.523.500', '-466.481.502.345.235'),
('24', '2021-08-11T12:59:45', 'Saldo', '', 'f8032d5cae3de20fcec887f395ec9a6a', '2a645dc95b8429aec0c92527a7fb3d6c', '-2.359.217.865.867.890', '-4.664.815.052.342.340');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
