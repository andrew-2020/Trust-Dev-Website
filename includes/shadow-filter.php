<filter id="shadow" width="200%" height="200%" filterUnits="userSpaceOnUse">
  <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur5"/>
  <feColorMatrix result="red-blur" in="blur5" type="matrix"
    values="0.4 0 0 0 0
    0 0 0 0 0
    0 0 0.4 0 0
    0 0 0 1 0" />
  <feMerge>
    <feMergeNode in="blur5"/>
    <feMergeNode in="SourceGraphic"/>
  </feMerge>
</filter>
