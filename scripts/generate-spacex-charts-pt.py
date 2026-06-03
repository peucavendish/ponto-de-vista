#!/usr/bin/env python3
"""Gera versões em português dos gráficos do artigo SpaceX."""

from pathlib import Path

import matplotlib.pyplot as plt
import matplotlib.patches as mpatches
import numpy as np

ROOT = Path(__file__).resolve().parents[1]
OUT = ROOT / "public" / "artigos"

plt.rcParams.update({
    "font.family": "sans-serif",
    "font.sans-serif": ["Helvetica Neue", "Arial", "DejaVu Sans"],
    "axes.spines.top": False,
    "axes.spines.right": False,
})


def chart_valuation():
    companies = [
        "Berkshire", "Tesla", "Meta", "Broadcom", "SpaceX",
        "Amazon", "Microsoft", "Alphabet", "Apple", "Nvidia",
    ]
    values = [1.0, 1.3, 1.4, 1.4, 1.75, 2.2, 2.7, 3.3, 3.6, 4.0]
    colors = ["#111111"] * len(companies)
    colors[4] = "#2f6fed"

    fig, ax = plt.subplots(figsize=(11, 6.2), dpi=160)
    fig.patch.set_facecolor("white")
    ax.set_facecolor("white")

    x = np.arange(len(companies))
    bars = ax.bar(x, values, color=colors, width=0.72, zorder=3)

    ax.bar(4, 4.2, width=0.92, color="#ececec", zorder=1, alpha=0.95)

    for bar in bars:
        bar.set_zorder(3)

    ax.set_ylim(0, 4.35)
    ax.set_yticks([1, 2, 3, 4])
    ax.set_yticklabels(["1", "2", "3", "4"], fontsize=11, color="#333")
    ax.set_ylabel("Valor de mercado em trilhões de dólares", fontsize=11, color="#333", labelpad=10)
    ax.set_xticks(x)
    ax.set_xticklabels(companies, rotation=0, fontsize=10.5, color="#111")
    ax.yaxis.grid(True, linestyle="-", linewidth=0.8, color="#d9d9d9", zorder=0)
    ax.set_axisbelow(True)

    ax.text(
        4, 4.05, "Valuation alvo da SpaceX no IPO",
        ha="center", va="bottom", fontsize=10, color="#333", fontweight="bold",
    )

    fig.suptitle(
        "Batendo à porta do clube mais exclusivo de Wall Street",
        fontsize=18, fontweight="bold", color="#111", y=0.98, x=0.08, ha="left",
    )
    fig.text(
        0.08, 0.905,
        "Um IPO de grande porte, com valuation alvo de US$ 1,75 trilhão, colocaria a SpaceX\n"
        "entre as empresas trilionárias — ao lado da Nvidia e da Apple.",
        fontsize=11.5, color="#333", ha="left", va="top", linespacing=1.35,
    )
    fig.text(
        0.08, 0.03,
        "Fonte: LSEG Datastream · Elaboração: Alta Vista Investimentos",
        fontsize=9.5, color="#666", ha="left",
    )

    plt.subplots_adjust(left=0.1, right=0.98, top=0.82, bottom=0.14)
    out = OUT / "spacex-ipo-valuation-trillion.png"
    fig.savefig(out, bbox_inches="tight", facecolor="white")
    plt.close(fig)
    print(f"Saved {out}")


def chart_launches():
    years = np.arange(2000, 2023)

    # Aproximação visual dos dados do gráfico original (space.skyrocket.de)
    spacex = np.array([
        0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2, 4, 6, 8, 12, 18, 26, 38, 52, 62,
    ], dtype=float)
    non_spacex_us = np.array([
        28, 26, 24, 22, 20, 18, 18, 20, 22, 20, 18, 16, 14, 13, 14, 13, 12, 12, 14, 13, 12, 14, 15,
    ], dtype=float)
    china = np.array([
        5, 6, 7, 8, 9, 10, 12, 14, 16, 18, 20, 22, 24, 26, 28, 30, 34, 38, 42, 48, 55, 60, 65,
    ], dtype=float)
    russia = np.array([
        32, 30, 28, 26, 24, 28, 30, 32, 34, 36, 35, 34, 32, 30, 28, 30, 28, 26, 24, 22, 20, 22, 24,
    ], dtype=float)
    rest = np.array([
        18, 17, 16, 16, 15, 15, 14, 14, 13, 13, 14, 14, 15, 15, 14, 14, 15, 16, 17, 18, 19, 20, 21,
    ], dtype=float)

    fig, ax = plt.subplots(figsize=(11, 6.2), dpi=160)
    fig.patch.set_facecolor("white")
    ax.set_facecolor("white")

    ax.bar(years, spacex, label="SpaceX", color="#111111", width=0.82, zorder=3)
    ax.bar(years, non_spacex_us, bottom=spacex, label="EUA (exceto SpaceX)", color="#5bbfb3", width=0.82, zorder=3)
    ax.bar(years, china, bottom=spacex + non_spacex_us, label="China", color="#1f4e79", width=0.82, zorder=3)
    ax.bar(
        years, russia,
        bottom=spacex + non_spacex_us + china,
        label="Rússia", color="#b8b8b8", width=0.82, zorder=3,
    )
    ax.bar(
        years, rest,
        bottom=spacex + non_spacex_us + china + russia,
        label="Resto do mundo", color="#c9a227", width=0.82, zorder=3,
    )

    ax.set_ylim(0, 210)
    ax.set_yticks([0, 50, 100, 150, 200])
    ax.set_ylabel("Número de lançamentos", fontsize=11, color="#333", labelpad=10)
    ax.set_xlim(1999.2, 2022.8)
    ax.set_xticks([2000, 2005, 2010, 2015, 2020])
    ax.set_xticklabels(["2000", "05", "10", "15", "20"], fontsize=11, color="#333")
    ax.yaxis.grid(True, linestyle="-", linewidth=0.8, color="#d9d9d9", zorder=0)
    ax.set_axisbelow(True)

    legend = ax.legend(
        loc="upper center", bbox_to_anchor=(0.5, -0.08), ncol=5, frameon=False,
        fontsize=10, handlelength=1.2, columnspacing=1.2,
    )
    for text in legend.get_texts():
        text.set_color("#222")

    fig.suptitle(
        "Corrida espacial",
        fontsize=20, fontweight="bold", color="#111", y=0.98, x=0.08, ha="left",
    )
    fig.text(
        0.08, 0.905,
        "O número de lançamentos aumentou de forma acelerada nos últimos anos.",
        fontsize=12, color="#333", ha="left", va="top",
    )
    fig.text(
        0.08, 0.03,
        "Fonte: space.skyrocket.de · Elaboração: Alta Vista Investimentos",
        fontsize=9.5, color="#666", ha="left",
    )

    plt.subplots_adjust(left=0.1, right=0.98, top=0.84, bottom=0.2)
    out = OUT / "spacex-ipo-space-race-launches.png"
    fig.savefig(out, bbox_inches="tight", facecolor="white")
    plt.close(fig)
    print(f"Saved {out}")


if __name__ == "__main__":
    OUT.mkdir(parents=True, exist_ok=True)
    chart_valuation()
    chart_launches()
