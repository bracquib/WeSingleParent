const AiLoaderIcon = ( { size = 24, ...otherProps } ) => (
	<svg
		xmlns="http://www.w3.org/2000/svg"
		viewBox="0 0 24 24"
		height={ size }
		width={ size }
		fill="none"
		{ ...otherProps }
	>
		<path
			fill="#0E0A1A"
			fillRule="evenodd"
			d="M12.362 7.064a.75.75 0 0 0-.61 0L6.586 9.361a.75.75 0 0 0 0 1.371l1.851.823v3.36c0 .253.128.49.34.628l.41-.628-.41.628.003.002.005.003.017.011a5.936 5.936 0 0 0 .28.17c.185.109.444.253.744.398.57.276 1.4.613 2.165.623.793.01 1.658-.328 2.251-.608a10.963 10.963 0 0 0 1.067-.58l.018-.01.006-.004.002-.002-.405-.63.406.63a.75.75 0 0 0 .343-.63v-3.36l1.852-.824a.75.75 0 0 0 0-1.37l-5.168-2.298Zm1.816 5.158-1.816.807a.75.75 0 0 1-.61 0l-1.816-.807v2.27c.148.083.334.184.542.285.543.262 1.12.468 1.532.473.427.005 1.026-.198 1.592-.465.222-.104.42-.21.576-.297v-2.266Zm-2.12-.699-3.322-1.476 3.321-1.477 3.322 1.477-3.322 1.476Z"
			clipRule="evenodd"
		/>
		<path
			stroke="#0E0A1A"
			strokeLinecap="round"
			strokeWidth={ 1.5 }
			d="M20.6 11.9a8.6 8.6 0 0 1-8.6 8.6m-8.6-8.6A8.6 8.6 0 0 1 12 3.3"
		/>
	</svg>
);

export default AiLoaderIcon;
