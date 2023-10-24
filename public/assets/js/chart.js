$(function () {
    'use strict';

    // Taux d'occupation journalier (Chambres)
    var chambreData = {
        labels: ['Libres', 'Réservés', 'Occupés', 'En travaux'],
        datasets: [{
            data: [20, 20, 30, 5],
            backgroundColor: ['#a4dfdf', '#9ad0f5', '#ffcf9f', '#ffb0c1']
        }]
    };

    // Taux d'occupation journalier (Hébergés)
    var hebergeData = {
        labels: ['Libres', 'Réservés', 'Occupés'],
        datasets: [{
            data: [15, 25, 35],
            backgroundColor: ['#a4dfdf', '#9ad0f5', '#ffcf9f']
        }]
    };

    var options = {
        maintainAspectRatio: false,
        responsive: true,
        legend: {
            display: false,
        },
        animation: {
            animateScale: true,
            animateRotate: true
        }
    };

    // Doughnut Chart for Chambres
    var ctxChambres = document.getElementById('chartChambres');
    var chartChambres = new Chart(ctxChambres, {
        type: 'doughnut',
        data: chambreData,
        options: options
    });

    // Doughnut Chart for Hébergés
    var ctxHeberges = document.getElementById('chartHeberges');
    var chartHeberges = new Chart(ctxHeberges, {
        type: 'doughnut',
        data: hebergeData,
        options: options
    });

	// Données du chiffre d'affaires mensuel
    var chiffreAffaireData = {
        labels: ['Total', 'Restant'],
        datasets: [{
            data: [2000, 2500],
            backgroundColor: ['#a4dfdf','#ffb0c1']
        }]
    };

    var options = {
        maintainAspectRatio: false,
        responsive: true,
        legend: {
            display: false,
        },
        animation: {
            animateScale: true,
            animateRotate: true
        }
    };

    // Graphique de chiffre d'affaires mensuel en donut
    var ctxChiffreAffaire = document.getElementById('chiffreAffaire');
    var chartChiffreAffaire = new Chart(ctxChiffreAffaire, {
        type: 'doughnut',
        data: chiffreAffaireData,
        options: options
    });

});